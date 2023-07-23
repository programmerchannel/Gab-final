<fieldset>
    <div class="form-group">
        <label for="f_name">Username *</label>
          <input type="text" name="username" value="<?php echo htmlspecialchars($edit ? $customer['username'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="First Name" class="form-control" required="required" id = "f_name" >
    </div> 
 <div class="form-group">
        <label for="f_name">Email *</label>
          <input type="text" name="email" value="<?php echo htmlspecialchars($edit ? $customer['email'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="First Name" class="form-control" required="required" id = "f_name" >
    </div> 
    <div class="form-group">
        <label for="l_name">balance*</label>
        <input type="text" name="balance" value="<?php echo htmlspecialchars($edit ? $customer['balance'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Last Name" class="form-control" required="required" id="l_name">
    </div> 

   

    
    
  
    

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
