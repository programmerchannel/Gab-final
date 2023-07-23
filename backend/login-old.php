<?php 
include('server.php');
include('../settings.php');

 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
  <title>Binary option</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet" href="./style.css">

</head>
<body>

	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3" style="text-align: center"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
		


<form method="post" action="login.php">
  	<?php include('errors.php'); ?>

								
<div class="form-group">
												<input  type="text" name="email" class="form-style" placeholder="Your email" id="username" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button id = "logsubmit" type="submit" class="btn mt-4" name="login_user" style="margin-left: 25%">submit</button>
                            				<p class="mb-0 mt-4 text-center"><a id="forget" href="#0" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>
</form>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Sign Up</h4>
		<form method="post" action="login.php">
  	<?php include('errors.php'); ?>					
											<div class="form-group mt-2">
												<input class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" type="email" name="email" value="<?php echo $email; ?>">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
		<input  class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" type="password" name="password_1">
		<i class="input-icon uil uil-lock-alt"></i>
		</div>
		<div class="form-group mt-2">
<input  class="form-style" placeholder="Confirm Password" id="logpass" autocomplete="off" type="password" name="password_2">
<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button type="submit" class="btn" name="reg_user" style="margin-left: 25%">submit</button>
											</form>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
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