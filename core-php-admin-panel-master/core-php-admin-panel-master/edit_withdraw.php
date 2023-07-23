<?php
include '../../backend/server.php';
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';?>
<?php
//$dab = mysqli_connect('127.0.0.1', '', '', '');
if(isset($_GET['user'])){
 $username = $_GET['user'];
 $getwithdraw = "SELECT * FROM withdraw WHERE user='$username' AND status = 'pending'";
  $withdrawresult = mysqli_query($dab, $getwithdraw);
$customer = mysqli_fetch_assoc($withdrawresult);}
    
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
            require_once('./forms/withdraw_form.php'); 
			
        ?>
    </form>
</div>




<?php include_once 'includes/footer.php'; ?>

<?php 
if(isset($_POST['withdapprove'])){
$amounttoadd = $_POST['amount'];	
	
$id = $_POST['id'];

$updatestatus = "UPDATE withdraw SET status = 'approved' WHERE  id='$id'";	
 $runupstatus = mysqli_query($dab, $updatestatus);

}

if(isset($_POST['withddecline'])){
$amounttodeduct = $_POST['amount'];	
$id = $_POST['id'];

$updatestatus = "UPDATE withdraw SET status = 'declined' WHERE user = '$username' AND id='$id'";	
 $runupstatus = mysqli_query($dab, $updatestatus);
 
 $refundbalance = "UPDATE users SET balance = balance + '$amounttodeduct' WHERE username = '$username'";	
 $runrefundbalance = mysqli_query($dab, $refundbalance);


}
?>