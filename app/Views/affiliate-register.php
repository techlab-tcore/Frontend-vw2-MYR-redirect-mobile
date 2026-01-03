<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta id="meta-viewport" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, viewport-fit=cover">
<meta name="robots" content="index, follow">
<meta name="description" content="Malaysia Gaming">

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

<title><?=$_ENV['company'];?></title>

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
<body class="h-100" oncontextmenu="return false;">

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

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F9NPHC2JRM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-F9NPHC2JRM');
</script>

<!--block inspect-->
<script disable-devtool-auto src='<?=base_url('assets/vendors/block_inspect/block.js');?>' url='<?=$_ENV['download'];?>'></script>
<script>
document.onkeydown = function(e) {
    if(event.keyCode == 123) {
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
        return false;
    }
}
</script>
<!--end block inspect-->

<div class="outer-container home-page h-100" id="pMain">

<section class="container position-relative">

    <header class="primary_bg col-xl-6 col-lg-6 col-md-8 col-12 m-auto">

        <div class="navbar mobile-lang d-inline-block d-flex pb-3">
            <a class="text-decoration-none text-light ps-2" href="#" onclick="window.history.back();"><i class="bx bx-chevron-left"></i>Back</a>
            <a class="newlogo d-flex justify-content-end">
                <img class="newlogo w-50" src="<?=base_url('assets/img/lobby/logoA.png');?>" alt="<?=$_ENV['company'];?>" title="<?=$_ENV['company'];?>">
            </a>
        </div>
    </header>

    <main>
    <dl class="row g-0 m-0">
        <dd class="col-xl-6 col-lg-6 col-md-8 col-12 m-auto">

            <div class="card border-0 shadow">
                <div class="card-body p-xl-5 p-lg-5 p-md-5 p-4">
                    <h2 class="text-center pb-3 fw-semibold text-uppercase"><?=$secTitle;?></h2>
                    <?=form_open('', ['class'=>'form-validation affRegisForm','novalidate'=>'novalidate']);?>
                    <label><?=lang('Label.referrer');?></label>
                    <div class="input-group mb-3">
                        <!-- <span class="input-group-text bg-white"><?=lang('Label.referrer');?></span> -->
                        <input type="text" class="form-control rounded-end bg-light" id="referrerid" name="rid" value="<?=$loginId;?>" placeholder="<?=lang('Label.invalidreferrer');?>" readonly>
                    </div>

                    <label><?=lang('Input.mobileno');?></label>
                    <div class="input-group mb-3">
                        <!-- <span class="input-group-text bg-white"><i class="bx bx-mobile"></i></span> -->
                        <select class="form-select regi-mobile-code" name="regionCode" required>
                            <option value="MYR" selected><?=lang('Label.malaysia');?></option>
                            <option value="SGD"><?=lang('Label.singapore');?></option>
                        </select>
                        <!-- <a class="btn-lang dropdown-toggle regi-mobile-code" name="regionCode" id="dropdownMenuLang" data-bs-toggle="dropdown" aria-expanded="false">
                            <span id="selectedRegion">MYR</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end rounded-3 shadow-lg menuLang" aria-labelledby="dropdownMenuLang">
                            <li><a class="dropdown-item" value="MYR"><?=lang('Label.malaysia');?></a></li>
                            <li><a class="dropdown-item" value="SGD"><?=lang('Label.singapore');?></a></li>
                        </ul>
                        <input type="hidden" name="regionCode" id="regionCodeInput" value="MYR"> -->

                        <input type="text" pattern="^[0-9]{8,11}$" class="form-control fs-6" id="regisUsername" name="mobile" placeholder="<?=lang('Input.mobileno');?>" required>
                    </div>

                    <label class="TACOptionLabel"><?=lang('Input.tacoption');?></label>
                    <div class="dropdown mb-3">
                        <button class="TACbtn btn btn-outline-secondary dropdown-toggle w-100 text-start d-flex align-items-center gap-2"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            id="otpMethodBtn">
                            <?=lang('Input.tacoption');?>
                        </button>
                        <small class="w-100 form-text"><?=lang('Validation.tacoption');?></small>

                        <ul class="dropdown-menu TAC w-100">
                            <li><a class="dropdown-item otp-select" data-method="sms">SMS (Telco)</a></li>
                            <li><a class="dropdown-item otp-select" data-method="whatsapp">WhatsApp</a></li>
                        </ul>
                    </div>

                    <label><?=lang('Input.smstac');?></label>
                    <div class="input-group mb-3">
                        <!-- <span class="input-group-text bg-white"><i class="bx bx-barcode-reader"></i></span> -->
                        <input type="text" class="form-control" id="floatingTAC" name="veritac" placeholder="<?=lang('Input.smstac');?>" required>
                        <button type="button" class="btn btn-primary primary_bg primary_btn btn-tac rounded-end" id="timer" onclick="requestAffTac();"><?=lang('Nav.gettac');?></button>
                    </div>

                    <label><?=lang('Input.password');?></label>
                    <div class="input-group mb-3">
                        <!-- <span class="input-group-text bg-white"><i class="bx bx-lock"></i></span> -->
                        <input type="password" pattern=".{6,}" class="form-control rounded-end" id="regisPass" name="password" placeholder="<?=lang('Input.password');?>" required>
                        <small class="w-100 form-text"><?=lang('Validation.password');?></small>
                    </div>
                    
                    <!-- <span class="input-group-text bg-white"><i class="bx bxs-user-badge"></i></span> -->
                    <label><?=lang('Input.fullname');?></label>
                    <div class="input-group mb-3">
                        <input type="text" pattern="^[a-zA-Z ]{3,}$" class="form-control rounded-end" id="floatingFname" name="fname" placeholder="<?=lang('Input.fullname');?>" required>
                        <small class="w-100 form-text"><?=lang('Validation.fullname');?></small>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary primary_bg primary_btn btn-lg"><?=lang('Nav.submit');?></button>
                        <a target="_blank" class="btn btn-secondary whatsapp" href=""><i class='bx bxl-whatsapp'></i>Whatsapp</a>
                    </div>
                    <?=form_close();?>
                </div>
            </div>

        </dd>
    </dl>
    </main>
</section>

<script>
document.addEventListener('DOMContentLoaded', (event) => {

    const tacButton = document.getElementById("timer");
    tacButton.disabled = true;

    $('.affRegisForm').on('submit', function(e) {
        e.preventDefault();

        if (this.checkValidity() !== false) {
            generalLoading();

            $('.affRegisForm [type=submit]').prop('disabled', true);

            var params = {};
            var formObj = $(this).closest("form");
            $.each($(formObj).serializeArray(), function (index, value) {
                params[value.name] = value.value;
                params['affiliate'] = '<?=$affiliate;?>';
                params['agentrefer'] = '<?=$affiliate;?>';
            });

            $.post('/user/registration', {
                params
            }, function(data, status) {
                $('.affRegisForm [type=submit]').prop('disabled', false);
                const obj = JSON.parse(data);
                if( obj.code==1 ) {
                    swal.fire("Success!", obj.message, "success").then(()=>{
                        window.location.replace("https://topv2m.com/login/"+obj.contact+"/"+obj.password+"/"+obj.region);
                    });
                } else {
                    swal.fire("Error!", obj.message + " (Code: "+obj.code+")", "error").then(() => {
                        $('.affRegisForm [type=submit]').prop('disabled', false);
                    });
                }
            })
            .done(function() {
                $('.affRegisForm [type=submit]').prop('disabled', false);
            })
            .fail(function() {
                swal.fire("Error!", "Oopss! There are something wrong. Please try again later.", "error").then(()=>{
                    $('.affRegisForm [type=submit]').prop('disabled', false);
                });
            });
        }
    });
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

    document.querySelectorAll(".otp-select").forEach(item => {
        item.addEventListener("click", function () {
            $('.btn-tac').prop('disabled', false);
            const method = this.getAttribute("data-method");
            document.getElementById("otpMethodBtn").innerHTML =
                `${this.innerText}`;

        });
    });
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
// SMS Tac
function requestAffTac()
{
    method = $('#otpMethodBtn').text().trim();
    contact = $('.affRegisForm [name=mobile]').val();
    regioncode = $('.affRegisForm [name=regionCode]').val();

    if( contact!=='' && method==="WhatsApp" ) {

        //disable get tac option and allow readonly
        const otpMethodBtn = document.getElementById('otpMethodBtn');
        otpMethodBtn.disabled = true;
        $('.affRegisForm [name=mobile]').prop('readonly', true);

        //disable get tac button
        $('.btn-tac').prop('disabled', true);

        //send whatsapp
        whatsappTAC2(contact,regioncode);
        
    } else if( contact!=='' && method==="SMS (Telco)" ) {
        var pass = Math.floor(100000 + Math.random() * 900000);

        //disable get tac option and allow readonly
        const otpMethodBtn = document.getElementById('otpMethodBtn');
        otpMethodBtn.disabled = true;
        $('.affRegisForm [name=mobile]').prop('readonly', true);
        
        //disable get tac button
        $('.btn-tac').prop('disabled', true);

        //send sms
        sms(contact,pass,regioncode);

    } else{
        swal.fire("Error!", "<?=lang('Validation.cmobile');?>", "warning");
        return false;
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
        content += 'Code to be used once for login security verification.';

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

function whatsappTAC2(contact,mobilecode)
{

    var params = {};
    params['contact'] = contact;
    params['regioncode'] = mobilecode;

    $.post('/whatsapp/send-tac-mass', {
        params
    }, function(data, status) {
        const obj = JSON.parse(data);
        if( obj.code==0 ) {
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
    /*swal.fire({
        title: '<?//=lang('Label.loading');?>',
		showConfirmButton: false,
		allowOutsideClick: false,
		allowEscapeKey: false,
		customClass: {
			container: 'loading-gif'
		}
	});*/

    swal.fire({
        showConfirmButton: false,
        imageUrl: '<?=base_url('assets/img/loading.gif');?>',
        imageAlt: '<?=$_ENV['company'];?>',
        background: 'transparent'
	});
}
</script>