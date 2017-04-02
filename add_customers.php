<?php

$page_title = "Add Customer | West Coast Auto";

  include('templates/header.php');
  include('scripts/connection.php');

if (!$_SESSION['logged']) {
//  die ("not logged in!");
}

//check to see if there is a get variable

if (isset($_GET['id'])){
  
  $heading = "Edit Customer";
  
    $reset = '<a class="goback" href="view_customers.php">Cancel</a>';
    $submit = '<input type="submit" value="Update Customer" id="update_cust_btn" name="add_cust_btn"/>';
    $form_sub =   '<form method="POST" action="scripts/add_customers.php?id='.$_GET['id'].'" id="frm_add_customers">';
  
  //so this works..now I just need to fill in the values. shit. hard.
  //so i need to get all the values and..fill them in i guess
  include('scripts/edit_customer.php');
}else {
  
    //set the buttons
    $reset = '<input type="reset" value="clear" id="ass_cust_reset" />';
    $submit = '<input type="submit" value="Add Customer" id="add_cust_btn" name="add_cust_btn"/>';
    $form_sub = '  <form method="POST" action="scripts/add_customers.php" id="frm_add_customers">';
  
    $v_id = ""; 
    $v_cust_title = "";
    $v_cust_first = "";
    $v_cust_last = "";
    $v_cust_post = "";
    $v_cust_street = "";
   	$v_cust_sub ="";
   	$v_cust_state ="";
   	$v_cust_email ="";
    $v_cust_phone = "";
   	$v_cust_mob = "";
  
  $heading = "Add Customer"; 
}

?>
  
  <!-- row3 -->
  <div class="row" id="row3">
   <!-- main -->
  <div class="row" id="main" >   
    <!-- sidebar -->
<?php
    include ('templates/sidebar.php');
?>
    <div class="col-9 log_main cust_main">
       
    <h1><?php echo $heading; ?></h1>
      
<?php echo $form_sub; ?>
		
      <h3>Name</h3>
      <label>Title:</label>
      <input type="text" name="add_cust_title" id="ass_cust_title" value = "<?php echo $v_cust_title; ?>"/> <br/>
       <label>First Name:</label>
      <input type="text" name="add_cust_first" id="ass_cust_first" value = "<?php echo $v_cust_first; ?>" /> <br/>
       <label>Last Name:</label>
      <input type="text" name="add_cust_last" id="ass_cust_last" value = "<?php echo $v_cust_last; ?>" /> <br/>
      
      <h3>Address</h3>
       <label>Street &amp; Number:</label>
      <input type="text" name="add_cust_street" id="ass_cust_street" value = "<?php echo $v_cust_street; ?>" /> <br />
       <label>Suburb/City:</label>
      <input type="text" name="add_cust_city" id="ass_cust_city" value = "<?php echo $v_cust_sub; ?>" /> <br/>
       <label>Postcode:</label>
      <input type="text" name="add_cust_post" id="ass_cust_post" value = "<?php echo $v_cust_post; ?>" /> <br/>
       <label>State:</label>
      <input type="text" name="add_cust_state" id="ass_cust_state" value = "<?php echo $v_cust_state; ?>" /> <br/>
      
      <h3>Contact</h3>
        <label>Email:</label>
      <input type="email" name="add_cust_email" id="ass_cust_email" value = "<?php echo $v_cust_email; ?>" /> <br />
       <label>Home Phone:</label>
      <input type="text" name="add_cust_phone" id="ass_cust_phone" value = "<?php echo $v_cust_phone; ?>" /> <br/>
       <label>Mobile:</label>
      <input type="text" name="add_cust_mobile" id="add_cust_mobile" value = "<?php echo $v_cust_mob; ?>" /> <br/>
    
      <br />
      <?php 
        echo $reset;
        echo $submit;
      ?>
    
       </form>
    </div>
  
  
  </div>
  
  <?php
    
    include('templates/footer.php');
    
?>