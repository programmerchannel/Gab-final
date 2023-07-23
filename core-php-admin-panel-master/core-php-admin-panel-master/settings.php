<?php   
 session_start();
 require_once 'includes/auth_validate.php';

 include '../../backend/server.php' ;
  ?>
<?php


if(isset($_POST['settingssubmit'])){
$timerange = $_POST['timerange'];
$timemin = $_POST['timemin'];
$timemax = $_POST['timemax'];
$budgetrange = $_POST['budgetrange'];
$payout = $_POST['payout'];


$settingsinsert = "UPDATE  settings SET timerange = '$timerange' , timemin = '$timemin' , timemax = '$timemax' , budgetrange = '$budgetrange' , payout = '$payout'"; 

$settingsinsertrun = mysqli_query($db, $settingsinsert);


header('location:  customers.php');



}
?>