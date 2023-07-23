<fieldset>
<h1>Deposit</h1>


<div class="form-group">
        <label for="f_name">Id*</label>
          <input type="text" name="id" value="<?php echo $customer['id']; ?>" placeholder="First Name" class="form-control" required="required" id = "f_name" >
    </div> 
	
    <div class="form-group">
        <label for="f_name">Username *</label>
          <input type="text" name="username" value="<?php echo $customer['user']; ?>" placeholder="First Name" class="form-control" required="required" id = "f_name" >
    </div> 

    <div class="form-group">
        <label for="l_name">payment method*</label>
        <input type="text" name="balance" value="<?php echo $customer['payment_method'] ; ?>" placeholder="Last Name" class="form-control" required="required" id="l_name">
    </div> 


 <div class="form-group">
        <label for="l_name">amount*</label>
        <input type="text" name="amount" value="<?php echo $customer['amount'] ; ?>" placeholder="Last Name" class="form-control" required="required" id="l_name">
    </div>  
	
	
    <div class="form-group">
        <label for="l_name">Full name*</label>
        <input type="text" name="balance" value="<?php echo $customer['from_name']; ?>" placeholder="Last Name" class="form-control" required="required" id="l_name">
    </div> 
	
	   <div class="form-group">
        <label for="l_name">Address*</label>
        <input type="text" name="balance" value="<?php echo $customer['from_address']; ?>" placeholder="Last Name" class="form-control" required="required" id="l_name">
    </div> 

   <div class="form-group">
        <label for="l_name">Country*</label>
        <input type="text" name="balance" value="<?php echo $customer['from_country']; ?>" placeholder="Last Name" class="form-control" required="required" id="l_name">
    </div> 
	
	   <div class="form-group">
        <label for="l_name">Status*</label>
        <input type="text" name="balance" value="<?php echo $customer['status']; ?>" placeholder="Last Name" class="form-control" required="required" id="l_name">
    </div> 
	
	   <div class="form-group">
        <label for="l_name">Date*</label>
        <input type="text" name="balance" value="<?php echo $customer['date']; ?>" placeholder="Last Name" class="form-control" required="required" id="l_name">
    </div> 
    
     
  
    

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" name = "depapprove"  > Approve <span class="glyphicon glyphicon-send"></span></button>
		   <button type="submit" class="btn btn-warning" name="depdecline" > Decline <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
