<?php 
 session_start(); 
 include('../settings.php');
 $db = $data;

 
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
  <title>Roulette</title>
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
											<h4 class="mb-4 pb-3">Change password</h4>
		


<form method="post" action=" " >

 <?php 
 
 
 
 if(isset($_POST['reg_user'])) {
  // receive all input values from the form
   
    $useruser = $_GET['mail'];
 $code = $_GET['code'];
 
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($password_1)) { echo("Password is required"); }
  if ($password_1 != $password_2) {
  echo("The two passwords do not match");}

 $checkbase = "SELECT code FROM users where email = '$useruser'";
  $checkresult = mysqli_query($db, $checkbase);
  $getresult = mysqli_fetch_assoc($checkresult);
$getcode = $getresult['code'];
if($password_1 && $password_2 && $password_1 == $password_2 && $getcode == $code && $code != 1){
	
	echo("success");
	
		$password = md5($password_1);//encrypt the password before //saving in the database

  	$query = "UPDATE users SET password = '$password' where email = '$useruser'";
  			 
  	$runthisquery = mysqli_query($db, $query);
	
$codeto1 = "UPDATE users SET code = '1' where email = '$useruser'";
$runcodeto1 = mysqli_query($db, $codeto1);
	
header('location: login.php');
	
}
};
  ?>

									
<div class="form-group mt-2">
<input  class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" type="password" name="password_1">
<i class="input-icon uil uil-lock-alt"></i>
</div>
<div class="form-group mt-2">
<input  class="form-style" placeholder="Confirm Password" id="logpass" autocomplete="off" type="password" name="password_2">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button id="subpass" type="submit" class="btn" name="reg_user" style="margin-left: 25%">submit</button>
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
	//document.getElementById("subpass").addEventListener("click",function(){
	
	

	
	//});
	
	
	
	</script>
</html>



  	