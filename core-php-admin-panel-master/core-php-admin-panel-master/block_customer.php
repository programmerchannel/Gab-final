<?php 
include '../../backend/server.php';
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
// $db = mysqli_connect('127.0.0.1', '', '', '');
if (isset($_GET['clickeduser'])) 
{
$block_id = $_GET['clickeduser'];

	if($_SESSION['admin_type']!='super'){
		$_SESSION['failure'] = "You don't have permission to perform this action";
    	header('location: customers.php');
        exit;

	}
    $customer_id = $block_id;
$updateblock = "UPDATE users SET blocked = 1 WHERE username='$customer_id' ";
  $runblock = mysqli_query($db, $updateblock);
    $blockfile = "../../".$customer_id."block.txt";
	file_put_contents($blockfile,1);
	
	
    if ($runblock) 
    {
        $_SESSION['info'] = $block_id." "."is blocked";
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

// block and logout









