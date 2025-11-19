<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta id="meta-viewport" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, viewport-fit=cover">
<meta name="robots" content="index, follow">
<meta name="description" content="Malaysia Trusted Online Casino - Visit <?=$_ENV['siteurl'];?> Now! Explore the best online gambling games including live casino, sports betting, slot games, and more!">

<meta name="theme-color" content="#000">
<meta name="msapplication-TileColor" content="#000">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="#000">
<meta name="msapplication-navbutton-color" content="#000">

<link rel="apple-touch-icon" sizes="192x192" href="<?=base_url('assets/img/logo/appicon/192x192.png');?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/img/logo/appicon/180x180.png');?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('assets/img/logo/appicon/152x152.png');?>">
<link rel="apple-touch-icon" sizes="144x144" href="<?=base_url('assets/img/logo/appicon/144x144.png');?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('assets/img/appicon/120x120.png');?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url('assets/img/logo/appicon/114x114.png');?>">
<link rel="apple-touch-icon" sizes="96x96" href="<?=base_url('assets/img/logo/appicon/96x96.png');?>">
<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/img/logo/appicon/76x76.png');?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url('assets/img/logo/appicon/72x72.png');?>">
<link rel="apple-touch-icon" sizes="60x60" href="<?=base_url('assets/img/logo/appicon/60x60.png');?>">
<link rel="apple-touch-icon" sizes="57x57" href="<?=base_url('assets/img/logo/appicon/57x57.png');?>">
<link rel="apple-touch-icon" sizes="32x32" href="<?=base_url('assets/img/logo/appicon/32x32.png');?>">
<link rel="apple-touch-icon" sizes="16x16" href="<?=base_url('assets/img/logo/appicon/16x16.png');?>">

<title><?=$_ENV['company'];?> | Online Casino Malaysia | Trusted Online Gambling Sites</title>

<link rel="icon" sizes="192x192" href="<?=base_url('assets/img/logo/favicon.ico');?>">
<link rel="icon" type="image/x-icon" href="<?=base_url('assets/img/logo/favicon.ico');?>">

<script src="<?=base_url('assets/js/jquery-3.5.1.min.js');?>"></script>
<link rel="stylesheet" href="<?=base_url('assets/vendors/bootstrap/css/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?=base_url('assets/vendors/sweetalert2/sweetalert2.min.css');?>">
<link rel="stylesheet" href="<?=base_url('assets/vendors/boxicons/css/boxicons.min.css');?>">
<link rel="stylesheet" href="<?=base_url('assets/css/custom.css?v='.rand());?>">
<link rel="stylesheet" href="<?=base_url('assets/css/master.css?v='.rand());?>">
<link rel="stylesheet" href="<?=base_url('assets/css/responsive.css?v='.rand());?>">
<link rel="stylesheet" href="<?=base_url('assets/vendors/chatscreen/style.css?v='.rand());?>">
</head>
<body>

<section class="chatscreen" id="pMask" style="display: none;"></section>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
    const ua = navigator.userAgent.toLowerCase();
    if (ua.match(/MicroMessenger/i) == "micromessenger") {
        $('#pMask').show();
        $('#pMain').hide();
    } else {
        $('#pMask').hide();
        $('#pMain').show();
    }

    // $.get('/device/check', function(data, status) {
    //     const obj = JSON.parse(data);
    //     if( obj.mobile==false ) {
    //         window.location.href = '<?//=$_ENV['download'];?>';
    //     }
    // });
});
</script>

<div class="outer-container home-page bg-second h-100" id="pMain">

<section class="container wrap-registration position-relative">
    <dl class="row g-0 m-0 p-xl-5 p-lg-5 p-md-5 p-0">
        <dd class="col-xl-6 col-lg-6 col-md-6 col-12 m-auto">

            <div class="card border-0 shadow">
                <div class="card-body p-xl-5 p-lg-5 p-md-5 p-4">
                    <nav class="navbar dropdown mobile-lang d-inline-block d-flex pb-3">
                        <a class="btn-lang dropdown-toggle ms-auto" href="#" role="button" id="lobbydropdownMenuLang" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="<?=$_SESSION['lang'];?>"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end rounded-3 shadow-lg menuLang" aria-labelledby="dropdownMenuLang">
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="translation('cn')">简体中文</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="translation('en')"><i></i>English</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="translation('my')"><i></i>Bahasa</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="translation('th')"><i></i>ภาษาไทย</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0)" onclick="translation('vn')"><i></i>TIẾNG VIỆT</a></li>
                        </ul>
                    </nav>
                    <a class="logoA"><img class="w-100" src="<?=base_url('assets/img/lobby/logoB.png');?>" alt="<?=$_ENV['company'];?>" title="<?=$_ENV['company'];?>"></a>
                    <a class="deco d-flex justify-content-center align-items-center pb-4"><img class="w-75" src="<?=base_url('assets/img/lobby/deco.png');?>" alt="<?=$_ENV['company'];?>" title="<?=$_ENV['company'];?>"></a>
                    <div class="lobby-container list-group list-group-flush mt-2">
                        <a href="<?=$_ENV['homepage'];?>" class="btn-lobby list-group-item list-group-item-action d-flex align-items-center rounded ">
                            <img src="<?=base_url('assets/img/lobby/login_btn.png');?>">
                            <span class="flex-grow-1 text-center"><?=lang('Nav.login');?></span>
                            <i class="bx bx-chevron-right ms-auto"></i>
                        </a>

                        <a href="<?=$_ENV['redirectUrl'];?><?=$affiliate;?>" class="btn-lobby list-group-item list-group-item-action d-flex align-items-center rounded ">
                            <img src="<?=base_url('assets/img/lobby/register_btn.png');?>">
                            <span class="flex-grow-1 text-center"><?=lang('Nav.regisnow');?></span>
                            <i class="bx bx-chevron-right ms-auto"></i>
                        </a>

                        <a href="<?=$_ENV['download'];?>" class="btn-lobby bgdld list-group-item list-group-item-action d-flex align-items-center rounded">
                            <img src="<?=base_url('assets/img/lobby/dld_btn.png');?>">
                            <span class="flex-grow-1 text-center"><?=lang('Nav.download');?></span>
                            <i class="ms-auto"><i class='bx bxs-download' ></i>
                        </a>
                    </div>

                    <p class="cpyright d-flex mt-5 justify-content-center align-items-center">Copyright by VWorld 2.0</p>
                </div>
            </div>

        </dd>
    </dl>
</section>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
   
});
</script>

</div>

<script src="<?=base_url('assets/vendors/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?=base_url('assets/vendors/sweetalert2/sweetalert2.min.js');?>"></script>
<script src="<?=base_url('assets/js/master.js?v='.rand());?>"></script>
<script src="<?=base_url('assets/vendors/chatscreen/chatscreen.js?v='.rand());?>"></script>

</body>
</html>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
    $.get('/device/check', function(data, status) {
        const obj = JSON.parse(data);
    });

    getLiveChat();
});

// Support
function getLiveChat()
{
    $.get('/support/live-chat', function(data, status) {
        const obj = JSON.parse(data);
        if( obj.code==1 ) {
            $('a.liveChat').attr('href', obj.liveChatUrl);
        } else {
            swal.fire("Error!", obj.message + " (Code: "+obj.code+")", "error");
        }

        supportList();
    })
    .done(function() {
    })
    .fail(function() {
        swal.fire("Error!", "Oopss! There are something wrong. Please try again later.", "error");
    });
}

async function supportList()
{
    $.get('/list/support', function(data, status) {
        const obj = JSON.parse(data);
        const random = Math.floor(Math.random() * obj.data.length);
        if( obj.code==1 ) {
            $('a.whatsapp').attr('href','https://wa.me/6' + obj.data[random].whatsapp);

            $('a.whatsapp-forgotpass').attr('href','https://wa.me/6' + obj.data[random].whatsapp + '?text=Forgot Password');
        } else {
            swal.fire("Error!", obj.message + " (Code: "+obj.code+")", "error");
        }

        //userUplineContact();
    })
    .done(function() {
    })
    .fail(function() {
        swal.fire("Error!", "Oopss! There are something wrong. Please try again later.", "error");
    });
}


// SMS Tac
function requestSmsTac(dom)
{
    const contact = $('.'+dom+' [name=mobile]').val();

    if( contact=='' ) {
        swal.fire("Error!", "<?=lang('Validation.mobile');?>", "warning");
        return false;
    } else {
        $('.regisForm [name=mobile').prop('readonly', true);
        var pass = Math.floor(100 + Math.random() * 900000);
        sms(contact,pass);
    }
}

function requestTac()
{
    const contact = $('.regisForm [name=mobile]').val();

    if( contact=='' ) {
        swal.fire("Error!", "<?=lang('Validation.mobile');?>", "warning");
        return false;
    } else {
        $('.regisForm [name=mobile').prop('readonly', true);
        var pass = Math.floor(100 + Math.random() * 900000);
        sms(contact,pass);
    }
}

function requestAffTac()
{
    const contact = $('.affRegisForm [name=mobile]').val();
    const regioncode = $('.affRegisForm [name=regionCode]').val();

    if( contact=='' ) {
        swal.fire("Error!", "<?=lang('Validation.mobile');?>", "warning");
        return false;
    } else {
        $('.affRegisForm [name=mobile').prop('readonly', true);
        var pass = Math.floor(100000 + Math.random() * 900000);

        //Disable Get Tac Button
        $('.btn-tac').prop('disabled', true);

        //if (regioncode == 'MYR') {
            sms(contact,pass,regioncode);
        //} else {
        //    whatsappTAC(contact,pass, regioncode);
        //}
    }
}

function sms(contact,pass,regioncode)
{
    let content = '[<?=$_ENV['SMScompany'];?>]--' + pass + '--';
        content += 'Code to be used once for login security verification. Do not share Code with others. Disregard this SMS if you did not intend to log in.';

    var params = {};
    params['regioncode'] = regioncode;
    params['contact'] = contact;
    params['message'] = content;
    params['veritac'] = pass;

    $.post('/sms/send', {
        params
    }, function(data, status) {
        const obj = JSON.parse(data);
        if( obj.code==1 ) {
            timer();
        } else if( obj.code==39 ) {
            forceUserLogout();
        } else {
            swal.fire("Error!", obj.message + " (Code: "+obj.code+")", "error");
            $('.btn-tac').prop('disabled', false);
            $('.affRegisForm [name=mobile').prop('readonly', false);
        }
    });
}

function whatsappTAC(contact,pass,mobilecode)
{
    let content = '[<?=$_ENV['SMScompany'];?>]--' + pass + '--';
        content += 'Code to be used once for login security verification. Do not share Code with others. Disregard this SMS if you did not intend to log in.';

    var params = {};
    params['contact'] = contact;
    params['message'] = content;
    params['veritac'] = pass;
    params['mobilecode'] = mobilecode;

    $.post('/whatsapp/send-tac', {
        params
    }, function(data, status) {
        const obj = JSON.parse(data);
        if( obj.code==1 ) {
            swal.close();
            timer();
        } else if( obj.code==39 ) {
            forceUserLogout();
        } else {
            swal.fire("Error!", obj.message + " (Code: "+obj.code+")", "error");
            $('.btn-tac').prop('disabled', false);
            $('.affRegisForm [name=mobile').prop('readonly', false);
        }
    });
}

function timer()
{
    //$('.btn-tac').prop('disabled', true);

    var seconds = 120;
    var countdown = setInterval(function() {
        seconds--;
        document.getElementById("timer").textContent = seconds;
        if (seconds <= 0) {
            clearInterval(countdown);
            document.getElementById("timer").textContent = 'Get TAC';
            $('.btn-tac').prop('disabled', false);
            // timer();
        }
    }, 1000);
}
// End SMS Tac

function generalLoading()
{
    swal.fire({
        title: '<?=lang('Label.loading');?>',
		showConfirmButton: false,
		allowOutsideClick: false,
		allowEscapeKey: false,
		customClass: {
			container: 'loading-gif'
		}
	});
}
</script>