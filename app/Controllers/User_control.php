<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class User_control extends BaseController
{
    /*
	Protected
	*/

    protected function randomUsername()
    {
        $fixed = '';
		$randomUsername = $fixed.mt_rand(10, 99);
		$random = date('yndHis');
        return $random;
    }

    protected function checkLatestSecoreLog()
    {
        $earlier = date('Y-m-d 00:00:00', strtotime('-7 days'));
        $from = date('c', strtotime(date('Y-m-d 00:00:00', strtotime($earlier))));
        $to = date('c', strtotime(date('Y-m-d 23:59:59')));

        $payload = [
            'userid' => $_SESSION['token'],
            'fromdate' => $from,
            'todate' => $to,
            'pageindex' => 1,
            'rowperpage' => 1,
            'desc' => true
        ];
        $res = $this->game_model->selectAllGameCreditLog($payload);
        return $res;
    }

    protected function getUserBeforeLogin($mobile, $regioncode)
    {
        $payload = [
            'contactno' => $mobile,
            'regioncode' => $regioncode,
            'role' => 4,
            'onlyactive' => true,
        ];
        $res = $this->user_model->selectUserWithoutLogin($payload);
        return $res;
    }

    /*
    User
    */
    public function login()
	{
        $username = strtolower($this->request->getPost('params')['username']);
        $regioncode = $this->request->getPost('params')['regionCode'];
        $userBeforeLogin = $this->getUserBeforeLogin($username, $regioncode);
        // echo json_encode($userBeforeLogin);

        if( $userBeforeLogin['code']==1 && $userBeforeLogin['data']!=[] ):
            $payload = [
                'loginid' => strtolower($userBeforeLogin['data']['loginId']),
                'password' => $this->request->getPost('params')['password'],
                'ip' => $_SESSION['ip'],
                'role' => 4
            ];

            $res = $this->user_model->updateUserLogin($payload);
            if( $res['code']==1 ):
                $session = session();
                $user_data = [
                    'logged_in' => TRUE,
                    'firstTimeLogin' => $res['isFirstTimeLogin'],
                    'token' => $res['userId'],
                    'session' => $res['sessionId'],
                    'uplinerole' => $res['uplineRole'],
                    'role' => $res['role'],
                    'username' => strtolower($userBeforeLogin['data']['loginId']),
                    'regioncode' => $regioncode,
                    'contact' => $username
                ];
                $session->set($user_data);

                $payloadScoreLog = $this->checkLatestSecoreLog();
                if( $payloadScoreLog['code']==1 && $payloadScoreLog['data']!=[] ):
                    // Get leftover balance
                    $payloadGetBalance = [
                        'userid' => $_SESSION['token'],
                        'gameprovidercode' => $payloadScoreLog['data'][0]['gameProviderCode']
                    ];
                    $resGetBalance = $this->game_model->selectGameBalance($payloadGetBalance);
                    // Recall all the balance & update after-amount
                    if( $resGetBalance['code']==1 ):
                        $payloadTransfer = [
                            'userid' => $_SESSION['token'],
                            'gameprovidercode' => $resGetBalance['gameProviderCode'],
                            'transfertype' => 2,
                            'amount' => (float)$resGetBalance['balance']
                        ];
                        $resTransfer = $this->game_model->updateGameCredit($payloadTransfer);
                        // echo json_encode($resTransfer);
                    endif;
                endif;
            endif;
            echo json_encode($res);
        else:
            echo json_encode($userBeforeLogin);
        endif;
    }

    public function logout()
    {
        $session = session();
        $res = $this->user_model->updateUserLogout(['userid'=>$_SESSION['token']]);
        $session->destroy();
        clearstatcache();
        return redirect()->to(base_url());
    }

    public function userRegistration()
    {
        //if( session()->get('logged_in') ): return false; endif;

        $rules = [
            'params.password' => ['label'=>'Password','rules'=>'required|min_length[6]|max_length[15]'],
        ];

        $fullname = $this->request->getPost('params')['fname'];
        if ( preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $fullname) ) :
            echo json_encode(['code'=>-1, 'message'=>'Full Name contain special charactar']);
        elseif( !isset($this->request->getpost('params')['agentrefer']) ): 
            echo json_encode(['code'=>-2, 'message'=>'error']);
        elseif( $this->request->getpost('params')['agentrefer'] != $this->request->getpost('params')['affiliate'] ) :
            echo json_encode(['code'=>-3, 'message'=>'fatal error']);
        else:
        // Checking Mobile Number
        //$firstChar = substr($this->request->getPost('params')['mobile'], 0, $_ENV['numMobileCode']);
        //if( $firstChar==$_ENV['mobileCode'] ):
        //    echo json_encode([
        //        'code' => -1,
        //        'message' => lang('Validation.mobile')
        //    ]);
        //else:
            // Valid Mobile Number
            $mobile = preg_replace("/\s+/", "", strtolower($this->request->getpost('params')['mobile']));
            // Generate Member Username
            $randDigits = $this->randomUsername();
            $ag2chars = 'V2';
            $username = $ag2chars.$randDigits;
            // End Generate Member Username

            // $inputUsername = $this->request->getpost('params')['mobile'];
            $inputUsername = $username;
            $inputCPass = $this->request->getpost('params')['password'];
            $baseContact = base64_encode($this->request->getPost('params')['mobile']);
            $basePassword = base64_encode($this->request->getpost('params')['password']);
            $region = $this->request->getPost('params')['regionCode'];

            // $referrer = !empty($this->request->getpost('params')['referral']) ? $this->request->getpost('params')['referral'] : $_ENV['host'];
            if( isset($this->request->getpost('params')['affiliate']) && !isset($this->request->getpost('params')['referral']) ):
                $referrer = base64_decode($this->request->getpost('params')['affiliate']);
            elseif( !isset($this->request->getpost('params')['affiliate']) && isset($this->request->getpost('params')['referral']) ):
                $referrer = !empty($this->request->getpost('params')['referral']) ? $this->request->getpost('params')['referral'] : $_ENV['host'];
            else:
                $referrer = $_ENV['host'];
            endif;

            if( isset($_SESSION['taccode']) && $_SESSION['taccode']==$this->request->getpost('params')['veritac'] ):
                // Checking forbidden username - subaccount
                $subStandard = 'SUB';
                if( strpos($inputUsername, $subStandard)!== false ):
                    echo json_encode(['code'=>-1, 'message'=>lang('Validation.usernameforbidden')]);
                else:
                    // Checking forbidden username - agent or admin
                    $name = strtoupper($this->request->getpost('params')['mobile']);
                    if( $name=='AGENT' || $name=='ADMINISTRATOR' ):
                        echo json_encode(['code'=>-1, 'message'=>lang('Validation.usernameforbidden')]);
                    else:
                        if( $this->validate($rules) ):
                            $payload = [
                                'agentid' => $referrer,
                                'realname' => $this->request->getPost('params')['fname'],
                                'loginid'=> preg_replace("/\s+/", "", strtolower($inputUsername)),
                                'password'=> $inputCPass,
                                'name'=> strtoupper($this->request->getPost('params')['fname']),
                                'contact'=> $this->request->getPost('params')['mobile'],
                                'regionCode'=> $this->request->getPost('params')['regionCode'],
                                'gender' => 1,
                                'role'=> 4 // Member
                            ];
                            $res = $this->user_model->insertNewUser($payload);
                            // Login
                            /*if( $res['code']==1 ):
                                $resLogin = $this->user_model->updateUserLogin([
                                    'loginid' => strtolower($inputUsername),
                                    'password' => $inputCPass,
                                    'ip' => $_SESSION['ip'],
                                    'role' => 4
                                ]);

                                if( $resLogin['code']==1 ):
                                    $session = session();
                                    $user_data = [
                                        'logged_in' => TRUE,
                                        'firstTimeLogin' => $resLogin['isFirstTimeLogin'],
                                        'token' => $resLogin['userId'],
                                        'session' => $resLogin['sessionId'],
                                        'uplinerole' => $resLogin['uplineRole'],
                                        'role' => $resLogin['role'],
                                        'username' => strtolower($inputUsername)
                                    ];
                                    $session->set($user_data);
                                endif;
                                $result = array_merge($resLogin, ['contact'=>$baseContact, 'password'=>$basePassword, 'region'=>$region]);
                                echo json_encode($result);
                            else:
                                echo json_encode($res);
                            endif;*/
                            $result = array_merge($res, ['contact'=>$baseContact, 'password'=>$basePassword, 'region'=>$region]);
                            echo json_encode($result);
                        else:
                            echo json_encode([
                                'code' => -1,
                                'message' => $this->validator->getError('params.password')
                            ]);
                        endif;
                    endif;
                endif;
            else:
                unset($_SESSION['taccode']);
                echo json_encode(['code'=>-1, 'message'=>lang('Validation.smstac')]);
            endif;
        //endif;
        endif;
    }

    public function forgotPassword()
    {
        if( session()->get('logged_in') ): return false; endif;

        // Checking Mobile Number
        //$firstChar = substr($this->request->getPost('params')['mobile'], 0, 1);
        //if( $firstChar=='6' ):
            // $str = ltrim($this->request->getPost('params')['mobile'], '6');
        //    echo json_encode([
        //        'code' => -1,
        //        'message' => lang('Validation.mobile')
        //    ]);
        //else:
            // Valid Mobile Number
            $userBeforeLogin = $this->getUserBeforeLogin($this->request->getpost('params')['mobile'], $this->request->getpost('params')['regionCode']);
            $inputMobile = $this->request->getpost('params')['mobile'];
            $inputUsername = strtolower($userBeforeLogin['data']['loginId']);
            $inputCPass = $this->request->getpost('params')['cnewpass'];

            if( isset($_SESSION['taccode']) && $_SESSION['taccode']==$this->request->getpost('params')['veritac'] ):
                // Reset Current Password
                $payload = [
                    'loginid' => $inputUsername,
                    'contactno' => $inputMobile,
                ];
                $res = $this->user_model->updateUserPasswordReset($payload);
                // echo json_encode($res);
                
                // Update New Password
                if( $res['code']==1 && !empty($res['userId']) && !empty($res['password']) ):
                    $payloadUpdate = [
                        'userid' => $res['userId'],
                        'password' => $res['password'],
                        'newpassword' => $inputCPass,
                        'resetpassword' => false
                    ];
                    $resUpdate = $this->user_model->updateUserPasswordWithoutSession($payloadUpdate);
                    echo json_encode($resUpdate);
                else:
                    echo json_encode($res);
                endif;
            else:
                unset($_SESSION['taccode']);
                echo json_encode(['code'=>-1, 'message'=>lang('Validation.smstac')]);
            endif;
        //endif;
    }

    public function tac()
    {
        $session = session();
        $session->set('taccode', $this->request->getpost('params')['veritac']);
    }
}