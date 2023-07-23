<?php 
include '../../server.php';
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
// $db = mysqli_connect('127.0.0.1', 'root', '', '');
if (isset($_GET['clickeduser'])) 
{
$block_id = $_GET['clickeduser'];

	if($_SESSION['admin_type']!='super'){
		$_SESSION['failure'] = "You don't have permission to perform this action";
    	header('location: customers.php');
        exit;

	}
    $customer_id = $block_id;
$updateblock = "UPDATE users SET chat_blocked = 0 WHERE username='$customer_id' ";
  $runblock = mysqli_query($db, $updateblock);
    $blockfile = "../../".$customer_id."blockchat.txt";
	file_put_contents($blockfile,0);
    if ($runblock) 
    {
        $_SESSION['info'] = $block_id." "."chat is unblocked";
        header('location: customers.php');
        exit;
    }
    else
    {
    	$_SESSION['failure'] = "Unable to unblock customer";
    	header('location: customers.php');
        exit;

    }
    
}