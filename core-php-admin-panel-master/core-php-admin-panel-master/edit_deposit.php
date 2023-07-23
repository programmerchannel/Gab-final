<?php
include '../../backend/server.php';
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';?>
<?php

//$dab = mysqli_connect('127.0.0.1', '', '', '');
if(isset($_GET['user'])){
 $username = $_GET['user'];
 $getdeposit = "SELECT * FROM deposit WHERE user='$username' AND status='pending'";
  $depositresult = mysqli_query($dab, $getdeposit);
$customer = mysqli_fetch_assoc($depositresult);}
    
?>
<?php
    include_once 'includes/header.php';
?>
<div id="page-wrapper">
    <div class="row">
        <h2 class="page-header">Update Customer</h2>
    </div>
    <!-- Flash messages -->
    <?php
        include('./includes/flash_messages.php')
    ?>

    <form class="" action=" " method="post" enctype="multipart/form-data" id="contact_form">
        
        <?php
            //Include the common form for add and edit  
            require_once('./forms/deposit_form.php'); 
			
        ?>
    </form>
</div>




<?php include_once 'includes/footer.php'; ?>

<?php 
if(isset($_POST['depapprove'])){
$amounttoadd = $_POST['amount'];	
	$id = $_POST['id'];
$updatebalance = "UPDATE users SET balance = balance + $amounttoadd WHERE username = '$username'";	
 $runupbalance = mysqli_query($dab, $updatebalance);

$updatestatus = "UPDATE deposit SET status = 'approved' WHERE user = '$username' AND id='$id'";	
 $runupstatus = mysqli_query($dab, $updatestatus);
}

if(isset($_POST['depdecline'])){
$amounttoadd = $_POST['amount'];	
$id = $_POST['id'];
$updatestatus = "UPDATE deposit SET status = 'declined' WHERE user = '$username' AND id='$id'";	
 $runupstatus = mysqli_query($dab, $updatestatus);
}
?>