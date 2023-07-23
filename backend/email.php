<?php 
 session_start(); 
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
											<h4 class="mb-4 pb-3">Email</h4>
		


<form method="post" action="email.php">
  

									
<div class="form-group">
												<input id="forget" type="text" name="email" class="form-style" placeholder="Enter email to reset password" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											
											<button id="emsubmit" type="submit" class="btn mt-4" name="login_user" style="margin-left: 25%">submit</button>
				      					</div>
			      					</div>
			      				</div>
</form>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											
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
 document.getElementById("emsubmit").addEventListener("click", function(){
 var domain = "https://" + window.location.hostname + "/backend/changepass.php?mail=" + foremail;
  const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "email.php?dom="+domain);
  xhttp.send(); 
 });
  
 
	</script>
</html>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/PHPMailer/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/PHPMailer/src/SMTP.php';

$word4 = ";";
$word5 = "=";
$word6 = "<";
if(isset($_POST['login_user']) && strpos($_POST['email'], $word4) === false && strpos($_POST['email'], $word5) === false && strpos($_POST['email'], $word6) === false){
$foremail = $_POST['email'];
$email_get = "SELECT * FROM users WHERE email='$foremail'";

  $emailresult = mysqli_query($db, $email_get);
  $getmail = mysqli_fetch_assoc($emailresult);
$passemail = $getmail["email"];
 if($passemail){
  $recmail = $passemail;
    $rancode = rand(1000000,9000000);
  $updatecode = "UPDATE users SET code = $rancode where email='$recmail'";
$runcodeupdate = mysqli_query($db, $updatecode ); 
  
 
 $serurl = $_SERVER['HTTP_X_FORWARDED_HOST'];
 if($serurl){$xxx=3;}else{$serurl = $_SERVER['HTTP_HOST'] ; }

$body = $serurl."/backend/changepass.php?code=".$rancode."&mail=".$foremail ;
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
     $mail->Username = $smtpuser ; // YOUR gmail email
    $mail->Password = $smtppass ; // YOUR gmail password
    // Sender and recipient settings
  //  $mail->setFrom('mygamingsclubs@yahoo.com', 'Digit Casino');
  $mail->setFrom($smtpuser, $smtptitle);
    $mail->addAddress($recmail, 'Receiver Name');
  //  $mail->addReplyTo('mygamingsclubs@yahoo.com', 'Digit Casino'); // to set the reply to
    $mail->addReplyTo($smtpuser, $smtptitle); // to set the reply to
    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Reset password";
    $mail->Body = "reset your password"." ".$body ;
    $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';
   // if(isset($recmail)){
	 $mail->send();
	 
	// }
	 echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
}
}
?>