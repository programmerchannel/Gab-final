<?php   
 session_start();
 require_once 'includes/auth_validate.php';

 include '../../backend/server.php' ;
  ?>
<?php


if(isset($_POST['smtpsubmit'])){
$email = $_POST['email'];
$password = $_POST['password'];



$smtpinsert = "UPDATE  smtp SET email = '$email' , password = '$password'"; 

$smtpinsertrun = mysqli_query($db, $smtpinsert);


header('location:  customers.php');



}
?>
