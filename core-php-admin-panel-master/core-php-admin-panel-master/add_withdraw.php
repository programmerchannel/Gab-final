<?php   
 session_start();
 include '../../backend/server.php' ;
  ?>
<?php


if(isset($_POST['paymentsubmit'])){
$payment_method = $_POST['payment_method'];


$paymentinsert = "INSERT INTO withdraw_payment (payment_method) 
VALUES('$payment_method')";

$paymentrun = mysqli_query($db, $paymentinsert);


header('location:  customers.php');



}
?>