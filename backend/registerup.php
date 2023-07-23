  <?php 
  include('server.php');
  include('../settings.php');

  ?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
            "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" class="" id="root-html">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="robots" content="noindex, nofollow">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-KNXMCXL');</script>
            <!-- End Google Tag Manager -->

            <title></title>
            <link rel="icon" href="login/images/favicon.ico" />
                    <link href="login/css/ftmo-ui.bundle.css" rel="stylesheet" />
                    <link href="login/css/ftmo-ui-demo.bundle.css" rel="stylesheet" />
                    <link href="login/css/ftmo-ui-trader.bundle.css" rel="stylesheet" />
                    <link href="login/css/overrides.css" rel="stylesheet" />

        </head>

        <body class="">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNXMCXL"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

            <div class="layout-wrapper ">
                    <div style="visibility:hidden" class="login__language">
                        <select class="form-select login__language"
                                aria-label="Select language"
                                onchange="location=this.value"
                        >
                            <option class="kc-dropdown-item" value="" selected="selected">English</option>
                                        
                                <option class="kc-dropdown-item" value="" selected="selected"> Čeština</option>
                                        
                              <option class="kc-dropdown-item" value="" selected="selected">   Deutsch</option>
                                        
                               <option class="kc-dropdown-item" value="" selected="selected">  Tiếng Việt</option>
                                        
                               <option class="kc-dropdown-item" value="" selected="selected">  Português</option>
                                       
                              <option class="kc-dropdown-item" value="" selected="selected">   English</option>
                                        
                              <option class="kc-dropdown-item" value="" selected="selected">   Italiano</option>
                                        
                              <option class="kc-dropdown-item" value="" selected="selected">   Français</option>
                                        
                               <option class="kc-dropdown-item" value="" selected="selected">  Español</option>
                        </select>
                    </div>
                <div id="left">
                    <div id="upper-split">
                        <img src="" id="hero">
                    </div>
                    <div id="lower-split">
                        <img src="login/images/awards.svg" id="awards">
                    </div>
                </div>
                <div id="right" class="page page--trader page--login">
                    <div class="container login ">
                        <div class="login__row">
                            <div style="visibility:hidden" class="login__logo"></div>
                        </div>
                        <div class="">
                            <h1 class="login__heading">        Register

</h1>
                        </div>
                        <div class="row form-wrapper">
        <noscript>
            <div id="noscript-message">You have JavaScript disabled in your web browser, not everything is guaranteed to work properly.</div>
            <style>
                .login__language { display: none; }
                #noscript-message { padding: 7px 11px; background-color: red; }
            </style>
        </noscript>
        <div id="sign-in" class="transition--zoom-in zoomed-in">
                <form id="kc-form-login" onsubmit="login.disabled = true; return true;" action="login.php?s=1"
                      method="post">
					    	<?php include('errors.php'); ?>

                    <div class="login__row">

                            <input tabindex="1" id="username"
                                   class="form-control login__input "
                                   name="email"
                                   value="" type="text" autofocus autocomplete="off"
                                   placeholder="Email"
                                   aria-invalid=""
                            />

                    </div>

                    <div class="login__row">
                        <input
                                tabindex="2"
                                id="password"
                                class="form-control login__input"
                                placeholder="Password"
                                name="password_1"
                                type="password"
                                autocomplete="off"
                                aria-invalid=""
                        />
						  <input
                                tabindex="2"
                                id="password"
                                class="form-control login__input"
                                placeholder="Confirm password"
                                name="password_2"
                                type="password"
                                autocomplete="off"
                                aria-invalid=""
                        />
                    </div>
                    <div class="login__row login__row--shy login__remember-me">
                            <div class="form-check">
                             
                                
                                
                            

                    <div class="login__submit login__row" style="margin-left:120px; margin-bottom:500px">
                        <input type="hidden" id="id-hidden-input" name="credentialId"
                               />
                        <button tabindex="4"
                                class="btn btn--fluid btn-primary btn-sm " 
                                type="submit" name="reg_user" value="Sign In">
                            Register
                        </button>
                    </div>
                </form>

                <div id="kc-social-providers">
                    <div class="login__row">
                    </div>
                    <div class="login__row login__submit-via">
                           
                    </div>
                </div>
        </div>


                        </div>
                            <div class="row">
            <div class="login__row">
               
            </div>

                            </div>
                    </div>
                </div>
            </div>
                  
                    <script src="login/js/theme-switcher.js" type="text/javascript"></script>
					
        </body>
    </html>
	
		<script>
 document.getElementById("forget").addEventListener("click", function(){location.replace("email.php");
 });
 
  /*document.getElementById("logsubmit").addEventListener("click", function(){var defuser = document.getElementById("username").value;
  const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "login.php?qqq="+defuser);
  xhttp.send(); 
 });*/
	</script>
</html>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/PHPMailer/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/PHPMailer/src/SMTP.php';
if(isset($_POST['login_user'])){
$otp = rand(1000,9000);
$defuser = $_SESSION['username'];
$email_get = "SELECT email FROM users WHERE username='$defuser'";
  $emailresult = mysqli_query($db, $email_get);
  $getmail = mysqli_fetch_assoc($emailresult);
$recmail = $getmail["email"];
 
if($recmail){

$updateotp = "UPDATE users SET otp = $otp where email='$recmail'";
$runotpupdate = mysqli_query($db, $updateotp ); 




// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
   // $mail->Host = 'smtp.mail.yahoo.com';
    $mail->Host = $smtphost;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port = $smtpport;

   // $mail->Username = 'mygamingsclubs@yahoo.com'; // YOUR gmail email
    // $mail->Password = 'qcmlwjnwfhuyqyad'; // YOUR gmail password
     $mail->Username = $smtpuser; // YOUR gmail email
    $mail->Password = $smtppass; // YOUR gmail password
    // Sender and recipient settings
  //  $mail->setFrom('mygamingsclubs@yahoo.com', 'Digit Casino');
  $mail->setFrom($smtpuser, $smtptitle);
    $mail->addAddress($recmail, 'Receiver Name');
  //  $mail->addReplyTo('mygamingsclubs@yahoo.com', 'Digit Casino'); // to set the reply to
    $mail->addReplyTo($smtpuser, $smtptitle); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "OTP";
    $mail->Body = 'Hi'.' '.$_SESSION['username'].' '.'your OTP is'.' '.$otp;
    $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';
     if(isset($recmail)){
	 $mail->send();
	 }
	 echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
}
}
?>
<?php


$a=array();

$get_blocked_cookie = "SELECT cookie FROM users WHERE blocked = 1";
  $get_blockedcookresult = mysqli_query($db, $get_blocked_cookie);
  
 while($blockcookinfo = mysqli_fetch_assoc($get_blockedcookresult)){
   

  

foreach($blockcookinfo as $scook => $sVcook) {
 
array_push($a,$sVcook);

}}





?>
<script>
setInterval(cook, 1000);
//cook();
function cook(){
var getcook = localStorage.getItem("cookie");
var blockedcookie = <?php echo json_encode($a) ;?>;
console.log("blockedcookie", blockedcookie);
console.log("blockedcookie2", getcook);

for(var i=0; i<blockedcookie.length; i++){
if(getcook == blockedcookie[i])	{
	
	window.location.replace("https://" + window.location.hostname + "/backend/index.php?logout='1'");
	
}}
;}
</script>