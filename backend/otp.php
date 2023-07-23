<?php 
 session_start(); 
include('server.php') ?>
<?php  $myusr = $_SESSION['username']  ;?>
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
											<h4 class="mb-4 pb-3">OTP</h4>
		


<form method="post" action="otp.php">
  	<?php include('errors.php'); ?>

									
<div class="form-group">
												<input id="logmail" type="text" name="otp" class="form-style" placeholder="one time password sent to your email" id="logemail" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											
											<button id="otpsubmit" type="submit" class="btn mt-4" name="login_user" style="margin-left: 25%">submit</button>
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
 /*document.getElementById("otpsubmit").addEventListener("click", function(){var defmail = document.getElementById("logmail").value;
  const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "otp.php?otp="+defmail);
  xhttp.send();*/ 
 //});
	</script>
</html>
<?php

$getuser = $_SESSION['username'];
if(!$getuser){header('location: login.php');}

$otp_get = "SELECT otp FROM users WHERE username='$getuser'";
  $otpresults = mysqli_query($db, $otp_get);
  $getotp = mysqli_fetch_assoc($otpresults);
$newotp = $getotp["otp"];
$word4 = "<" ;
$word5 = "=" ;
$word6 = ";" ;
if(isset($_POST['login_user']) && strpos($_POST['otp'], $word4) === false && strpos($_POST['otp'], $word5) === false && strpos($_POST['otp'], $word6) === false ){
	if($_POST['otp'] == $newotp){$_SESSION['loggedIn'] = true ;
	//
	// session file
	  $ffff = rand(1000000,9000000);
	 
	  $_SESSION['sessionuid'] = $ffff;
	  $sss = $ffff;
	 $filesession = $myusr.'session.txt';
file_put_contents($filesession,$sss);
	
	// online file
 /*$onlineuser = "1"." ";
	 $fileuseron = $myusr.'online.txt';
file_put_contents($fileuseron,$onlineuser,FILE_APPEND);	*/
	
	
	  

	
	if($getuser != $adminuser){
	
	header('location: ../index.php');
	}
	  
	else{header('location: ../core-php-admin-panel-master/core-php-admin-panel-master/index.php');}  
}  
	  
	  
	  
	  
	 
else{header('location: index.php?logout=1');}}

?>
<?php


//$rndom = rand(1000000,9000000);
//	  $_SESSION['uniqueid'] = $rndom;
//	  $username = $_SESSION['username'];
//	  $mysession = $_SESSION['uniqueid'];
//	    $updatesession = "UPDATE users SET sessionid = '$mysession' where username='$username'";
// $runsession = mysqli_query($db, $updatesession); 







?>