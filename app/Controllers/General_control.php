<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class General_control extends BaseController
{

    public function checkDevice()
    {
        $device = $this->request->getUserAgent();
        $currentMobile = $device->isMobile();
		$currentPlatform = $device->getPlatform();
		$result = [
			'mobile' => $currentMobile,
			'platform' => $currentPlatform
		];
        echo json_encode($result);
    }

	public function index_affiliateRegister($affiliate)
	{
		//if( session()->get('logged_in') ): return redirect()->to(base_url()); endif;

		$data['secTitle'] = lang('Label.regis3');

		//$data['session'] = session()->get('logged_in') ? true : false;

		$uid = base64_decode($affiliate);

		//Get User Login ID
		$payload = [
            'userid' => $uid
        ];
		$resProfile = $this->user_model->selectLoginId($payload);
		if( $resProfile['code']==0):
			$data['loginId'] = $resProfile['loginId'];
        else:
			$data['loginId'] = lang('Label.invalidreferrer');
            //echo json_encode($resProfile['message']);
        endif;

		$data['affiliate'] = $affiliate;

		// echo view('template/start');
		// echo view('template/header');
        echo view('affiliate-register', $data);
		// echo view('template/footer');
		// echo view('template/end', $data);
	}

	//Whatsapp Regis
	public function index_redirect($affiliate)
	{
		//if( session()->get('logged_in') ): return redirect()->to(base_url()); endif;

		$data['secTitle'] = lang('Label.regis3');

		//$data['session'] = session()->get('logged_in') ? true : false;

		$data['affiliate'] = $affiliate;

		// echo view('template/start');
		// echo view('template/header');
        echo view('redirect', $data);
		// echo view('template/footer');
		// echo view('template/end', $data);
	}

	public function index($affiliate)
	{
		//if( session()->get('logged_in') ): return redirect()->to(base_url()); endif;

		$data['secTitle'] = lang('Label.regis3');

		//$data['session'] = session()->get('logged_in') ? true : false;

		$data['affiliate'] = $affiliate;

		// echo view('template/start');
		// echo view('template/header');
        echo view('index', $data);
		// echo view('template/footer');
		// echo view('template/end', $data);
	}

}
