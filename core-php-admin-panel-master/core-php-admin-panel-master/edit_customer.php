<?php
include '../../server.php';
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';
include('../../settings.php');


// Sanitize if you want
$customer_id = filter_input(INPUT_GET, 'customer_id', FILTER_VALIDATE_INT);
$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
($operation == 'edit') ? $edit = true : $edit = false;
 $db = getDbInstance();

//Handle update request. As the form's action attribute is set to the same script, but 'POST' method, 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	

	
	
	
    //Get customer id form query string parameter.
    $customer_id = filter_input(INPUT_GET, 'customer_id', FILTER_SANITIZE_STRING);

    //Get input data
   // $data_to_update = filter_input_array(INPUT_POST);
   $add = $_POST['add'];
   $deduct = $_POST['deduct'];
   $customer_id = $_GET['customer_id'];
  $username = $_POST['username'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
	$newbalance = $balance + $add - $deduct;
                  $data_to_update = array(
    'username' => $username,
    'email' => $email,
    'balance' => $newbalance
	
		
);
if(isset($_POST['save']) && isset($_POST['add'])){
	

// $dab = mysqli_connect('127.0.0.1', '', '', '');
 
 $adddeposit = "INSERT INTO deposit (user,payment_method,from_name,from_address,from_country,amount,transaction_id,status) values ('$username','admin','admin','admin','admin','$add','admin','approved')";
$runadddeposit = mysqli_query($dab, $adddeposit);

$deductwithdraw = "INSERT INTO withdraw (user,payment_method,to_name,to_address,to_country,amount,status) values ('$username','admin','admin','admin','admin','$deduct','admin','approved')";
$rundeductwithdraw = mysqli_query($dab, $deductwithdraw);
}


if(isset($_POST['save']) && isset($_POST['deduct'])){
	

$dab = $data;
 
 

$deductwithdraw = "INSERT INTO withdraw (user,payment_method,to_name,to_address,to_country,amount,status) values ('$username','admin','admin','admin','admin','$deduct','admin','approved')";
$rundeductwithdraw = mysqli_query($dab, $deductwithdraw);



}


  // $data_to_update['updated_at'] = date('Y-m-d H:i:s');
    $db = getDbInstance();
    $db->where('id',$customer_id);
    $stat = $db->update('users', $data_to_update);

    if($stat)
    {
        $_SESSION['success'] = "Customer updated successfully!";
        //Redirect to the listing page,
        header('location: customers.php');
        //Important! Don't execute the rest put the exit/die. 
        exit();
    }
}


//If edit variable is set, we are performing the update operation.
if($edit)
{
    $db->where('id', $customer_id);
    //Get data to pre-populate the form.
    $customer = $db->getOne("users");
}
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

    <form class="" action="" method="post" enctype="multipart/form-data" id="contact_form">
        
        <?php
            //Include the common form for add and edit  
            require_once('./forms/customer_form.php'); 
        ?>
    </form>
</div>



<?php include_once 'includes/footer.php'; ?>