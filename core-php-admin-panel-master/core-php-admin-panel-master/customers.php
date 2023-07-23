<?php
include '../../settings.php';
$dab = $data;
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

$getusername = $_SESSION['username'];
if($getusername == $adminuser){$xxss=1;}
else{header('location: ../../backend/login.php');}





// Costumers class
require_once BASE_PATH . '/lib/Costumers/Costumers.php';
$costumers = new Costumers();

// Get Input data from query string
$search_string = filter_input(INPUT_GET, 'search_string');
$filter_col = filter_input(INPUT_GET, 'filter_col');
$order_by = filter_input(INPUT_GET, 'order_by');

// Per page limit for pagination.
$pagelimit = 15;

// Get current page.
$page = filter_input(INPUT_GET, 'page');
if (!$page) {
	$page = 1;
}

// If filter types are not selected we show latest added data first
if (!$filter_col) {
	$filter_col = 'id';
}
if (!$order_by) {
	$order_by = 'Desc';
}

//Get DB instance. i.e instance of MYSQLiDB Library

  
  
$db = getDbInstance();
$select = array('id', 'username', 'email', 'balance', 'country', 'chat_blocked', 'blocked');

//Start building query according to input parameters.
// If search string
if ($search_string) {
	$db->where('username', '%' . $search_string . '%', 'like');
	$db->orwhere('email', '%' . $search_string . '%', 'like');
}

//If order by option selected
if ($order_by) {
	$db->orderBy($filter_col, $order_by);
}

// Set pagination limit
$db->pageLimit = $pagelimit;

// Get result of the query.
$rows = $db->arraybuilder()->paginate('users', $page, $select);
$total_pages = $db->totalPages;

include BASE_PATH . '/includes/header.php';



?>
<!-- Main container -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">Customers</h1>
        </div>
        <div class="col-lg-6" >
            <div class="page-action-links text-right">
                <a href="add_customer.php?operation=create" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add new</a>
				<button id="totaldeposit" class="btn btn-success" onclick = "totaldeposit()"><i class="glyphicon glyphicon-plus"></i>Total deposit</button>
			     <button id="totalwithdraw" class="btn btn-success" onclick = "totalwithdraw()"><i class="glyphicon glyphicon-plus"></i>Total withdraw</button>
				 <button id="totalbalance" class="btn btn-success" onclick = "totalbalance()"><i class="glyphicon glyphicon-plus"></i>Total balance</button><br><br>
				 <div style="display:inline;">
				 <button id="totalbalance" style="left:-60%; position: absolute" class="btn btn-success" onclick = "addpayment()"><i class="glyphicon glyphicon-plus"></i>Add Deposit payment</button>
               <button id="totalbalance" style="left:-25%; position: absolute" class="btn btn-success" onclick = "addwithdpayment()"><i class="glyphicon glyphicon-plus"></i>Add withdraw payment</button>
              <button id="totalcommission" style="left:10%; position: absolute" class="btn btn-success" onclick = "totalcommission()"><i class="glyphicon glyphicon-plus"></i>Total commission</button>
              </div>

            </div>
        </div>
    </div>
    <?php include BASE_PATH . '/includes/flash_messages.php';?>

    <!-- Filters -->
	<form>
	 <input type="radio" id="deposit" name="depwith" value="4">
  <label for="html">Deposit</label>
  <input type="radio" id="withdraw" name="depwith" value="1">
  <label for="css">withdraw</label>
</form>
	 <label for="get_search">Search</label>
            <input type="text" onkeyup="myFunction()" class="form-control" id="get_search" name="search" value="">
    <div class="well text-center filter-form">
        <form class="form form-inline" action="">
		
            <label for="input_search">Search</label>
            <input type="text" class="form-control" id="input_search" name="search_string" value="<?php echo xss_clean($search_string); ?>">
            <label for="input_order">Order By</label>
            <select name="filter_col" class="form-control">
                <?php
foreach ($costumers->setOrderingValues() as $opt_value => $opt_name):
	($order_by === $opt_value) ? $selected = 'selected' : $selected = '';
	echo ' <option value="' . $opt_value . '" ' . $selected . '>' . $opt_name . '</option>';
endforeach;
?>
            </select>
            <select name="order_by" class="form-control" id="input_order">
                <option value="Asc" <?php
if ($order_by == 'Asc') {
	echo 'selected';
}
?> >Asc</option>
                <option value="Desc" <?php
if ($order_by == 'Desc') {
	echo 'selected';
}
?>>Desc</option>
            </select>
            <input type="submit" value="Go" class="btn btn-primary">
        </form>
    </div>
    <hr>
    <!-- //Filters -->


    <div id="export-section">
        <a href="export_customers.php"><button class="btn btn-sm btn-primary">Export to CSV <i class="glyphicon glyphicon-export"></i></button></a>
    </div>

    <!-- Table -->
    <table class="table table-striped table-bordered table-condensed" id="table">
        <thead>
            <tr>
                <th width="5%">ID</th>
                <th width="5%">Username</th>
                <th width="5%">Email</th>
                <th width="5%">Balance</th>
				<th width="5%">Country</th>
				<th width="5%">deposit request</th>
			    <th width="5%">withdraw request</th>
				<th width="1%">Chat blocked</th>
				<th width="1%">Blocked</th>
                <th width="20%">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row): 
			
			
			$rowuser = $row['username'];
// $dab = mysqli_connect('127.0.0.1', '', '', '');
 $getdepstatus = "SELECT status FROM deposit WHERE user='$rowuser' AND status='pending'";
  $statusresult = mysqli_query($dab, $getdepstatus);
  $laststatus = mysqli_fetch_assoc($statusresult);
  $status = $laststatus['status'];
			
 $getwithdstatus = "SELECT status FROM withdraw WHERE user='$rowuser' AND status='pending'";
  $withdstatusresult = mysqli_query($dab, $getwithdstatus);
  $lastwithdstatus = mysqli_fetch_assoc($withdstatusresult);
  $withdstatus = $lastwithdstatus['status'];		
	
 if($row['chat_blocked'] == 1){$chat = "blocked";} else{$chat = " ";}
  if($row['blocked'] == 1){$blocked = "blocked";} else{$blocked = " ";}

			
			
			?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo xss_clean($row['username']); ?></td>
                <td><?php echo xss_clean($row['email']); ?></td>
                <td><?php echo xss_clean($row['balance']); ?></td>
				 <td><?php echo xss_clean($row['country']); ?></td>
                 <td><?php echo $status; ?></td>
				<td><?php echo $withdstatus; ?></td>
				<td><?php echo $chat; ?></td>
				<td><?php echo $blocked; ?></td>

                <td>
     <a href="edit_customer.php?customer_id=<?php echo $row['id']; ?>&operation=edit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
<a href="#" class="btn btn-danger delete_btn" data-toggle="modal" data-target="#confirm-delete-<?php echo $row['username']; ?>"><i class="glyphicon glyphicon-trash"></i></a>
<a href="edit_deposit.php?user=<?php echo $row['username']; ?>&operation=edit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
<a href="edit_withdraw.php?user=<?php echo $row['username']; ?>&operation=edit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
<a  href="block_customer.php?clickeduser=<?php echo $row['username']; ?>" id=" " class="btn btn-success"   ><i class="glyphicon glyphicon-plus"></i>Block</a>
<a  style="display:none" href="block_chat.php?clickeduser=<?php echo $row['username']; ?>"  id=" " class="btn btn-success"  ><i class="glyphicon glyphicon-plus"></i>Block chat</a>
<a  href="unblock_customer.php?clickeduser=<?php echo $row['username']; ?>" id=" " class="btn btn-success" ><i class="glyphicon glyphicon-plus"></i>Unblock</a>
<a  style="display:none" href="unblock_chat.php?clickeduser=<?php echo $row['username']; ?>"  id=" " class="btn btn-success"   ><i class="glyphicon glyphicon-plus"></i>Unblock chat</a>

 
 
 
	
	



 </td>
            </tr>
			 
			
			
            <!-- Delete Confirmation Modal -->
            <div  class="modal fade" id="confirm-delete-<?php echo $row['username']; ?>" role="dialog">
                <div class="modal-dialog">
                    <form action="delete_customer.php" method="POST">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirm</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="del_id" id="del_id" value="<?php echo $row['username']; ?>">
                                <p>Are you sure you want to delete this row?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default pull-left">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- //Delete Confirmation Modal -->
		
		
            <?php endforeach;?>
        </tbody>
    </table>
    <!-- //Table -->



    <!-- Pagination -->
    <div class="text-center">
    <?php echo paginationLinks($page, $total_pages, 'customers.php'); ?>
    </div>
    <!-- //Pagination -->
</div>
<!-- //Main container -->
<?php include BASE_PATH . '/includes/footer.php';?>

<?php

 $getcommission = "SELECT SUM(commission) AS commission_sum FROM games ";
  $getcommissionresult = mysqli_query($dab, $getcommission);
  $tocommission = mysqli_fetch_assoc($getcommissionresult);
  $totalcommission = $tocommission['commission_sum'];





?>

<?php

 $getbalance = "SELECT SUM(balance) AS balance_sum FROM users ";
  $getbalanceresult = mysqli_query($dab, $getbalance);
  $tobalance = mysqli_fetch_assoc($getbalanceresult);
  $totalbalance = $tobalance['balance_sum'];?>
<?php
$gettotaldeposit = "SELECT SUM(amount) AS deposit_sum FROM deposit WHERE status = 'approved' ";
  $gettotaldep = mysqli_query($dab, $gettotaldeposit);
  $todeposit = mysqli_fetch_assoc($gettotaldep);
  $totaldeposit = $todeposit['deposit_sum'];
	?>	

<?php
$gettotalwithdraw = "SELECT SUM(amount) AS withdraw_sum FROM withdraw WHERE status = 'approved' ";
  $gettotalwithd = mysqli_query($dab, $gettotalwithdraw);
  $towithdraw = mysqli_fetch_assoc($gettotalwithd);
  $totalwithdraw = $towithdraw['withdraw_sum'];
	?>		
<script>

function totalcommission(){

document.getElementById("totalcommission").innerHTML = <?php  echo $totalcommission;     ?>;
}

function totalbalance(){

document.getElementById("totalbalance").innerHTML = <?php  echo $totalbalance;     ?>;
}

function totaldeposit(){

document.getElementById("totaldeposit").innerHTML = <?php  echo $totaldeposit;     ?>;
}

function totalwithdraw(){

document.getElementById("totalwithdraw").innerHTML = <?php  echo $totalwithdraw;     ?>;
}
</script>


<script>
 function myFunction() {
	//document.getElementById("clicksearch").addEventListener("click", function(){
	var depbut = document.getElementById("deposit");
   var withdbut =  document.getElementById("withdraw");
   var filtervalue ;
if(withdbut.checked){filtervalue = 6;}
else{filtervalue = 5;}
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("get_search");
  filter = input.value;
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[filtervalue];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  };
 }
 //);
 </script>
 
 <style>
 
 body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}
 .form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
 
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color:  DimGray;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 0px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: black;
  color: gold;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
 
 
 </style>
 <div class="form-popup" id="add_withdpayment">
  <form method = "post" action="add_withdraw.php" class="form-container">
    <h1>withdraw method</h1>

   
	
	 <label for="psw"><b>Payment method</b></label>
    <input type="text" placeholder="payment method" name="payment_method" required>

    <button type="submit" class="btn" name="paymentsubmit"  >Add</button>
    <button type="button" class="btn cancel" onclick="removewithdraw()">Close</button>
  </form>
</div>





 
 <div class="form-popup" id="add_payment">
  <form method = "post" action="add_payment.php" class="form-container">
    <h1>payment method</h1>

   
	
	 <label for="psw"><b>Payment method</b></label>
    <input type="text" placeholder="payment method" name="payment_method" required>


      <label for="psw"><b>To user</b></label>
    <input type="text" placeholder="username" name="userpayment" required>
	
	
	 <label for="psw"><b>To name</b></label>
    <input type="text" placeholder="Full name" name="to_name" required>

    <label for="psw"><b>To address</b></label>
    <input type="text" placeholder="username or address or email" name="to_address" required>
	
	 <label for="psw"><b>To country</b></label>
    <input type="text" placeholder="country" name="to_country" required>
	
	 <label for="psw"><b>Link</b></label>
    <input type="text" placeholder="link" name="link" required>
	
	 <label for="psw"><b>Description</b></label>
    <input type="text" placeholder="description" name="description" required>
	
	 <label for="psw"><b></b></label>
    <input type="hidden" placeholder="country" name="repeat" value= >
	
	
	

    <button type="submit" class="btn" name="paymentsubmit"  >Add</button>
    <button type="button" class="btn cancel" onclick="removeform()">Close</button>
  </form>
</div>


<script>
function addpayment(){
document.getElementById("add_payment").style.display = "block";
document.getElementById("add_payment").style.transform = "scale(1,0.7)";
document.getElementById("add_payment").style.bottom = "-20%";

}

function addwithdpayment(){
document.getElementById("add_withdpayment").style.display = "block";

}
function removeform(){
document.getElementById("add_payment").style.display = "none";

}
function removewithdraw(){
document.getElementById("add_withdpayment").style.display = "none";

}
</script>

