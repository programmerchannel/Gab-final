<?php   
 session_start();
 include '../../backend/server.php' ;
  ?>
<?php


if(isset($_POST['paymentsubmit'])){
$payment_method = $_POST['payment_method'];
$to_name = $_POST['to_name'];
$to_address = $_POST['to_address'];
$to_country = $_POST['to_country'];
$link = $_POST['link'];
$description = $_POST['description'];
$userpayment = $_POST['userpayment'];

$paymentinsert = "INSERT INTO deposit_payment (to_user, payment_method, to_name, to_address, to_country, description,  link) 
VALUES('$userpayment', '$payment_method', '$to_name', '$to_address', '$to_country', '$description', 'link')";

$paymentrun = mysqli_query($db, $paymentinsert);


header('location:  customers.php');



}
?>