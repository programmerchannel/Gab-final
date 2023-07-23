<?php 
include '../../server.php';
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
// $db = mysqli_connect('', '', '', '');
if (isset($_GET['clickeduser'])) 
{
$block_id = $_GET['clickeduser'];

	if($_SESSION['admin_type']!='super'){
		$_SESSION['failure'] = "You don't have permission to perform this action";
    	header('location: customers.php');
        exit;

	}
    $customer_id = $block_id;
$updateblock = "UPDATE users SET chat_blocked = 1 WHERE username='$customer_id' ";
  $runblock = mysqli_query($db, $updateblock);
    $blockchatfile = "../../".$customer_id."blockchat.txt";
	file_put_contents($blockchatfile,1);
    if ($runblock) 
    {
        $_SESSION['info'] = $block_id." "."chat is blocked";
        header('location: customers.php');
        exit;
    }
    else
    {
    	$_SESSION['failure'] = "Unable to block customer";
    	header('location: customers.php');
        exit;

    }
    
}