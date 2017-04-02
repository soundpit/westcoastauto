<?php

$page_title = "Add Salesperson | West Coast Auto";

include('templates/header.php');
include('scripts/connection.php');

if (isset($_GET['id'])){
  
  $heading = "Edit Salesperson";
  
    $reset = '<a class = "goback" href="view_salesperson.php">Cancel</a>';
    $submit = '<input type="submit" value="Update Salesperson" id="add_sales_btn" name="add_sales_btn"/>';
    $form_sub =   '<form method="POST" action="scripts/add_salesperson.php?id='.$_GET['id'].'" id="frm_add_salespersons">';
    $pass_word_field = '<p>* Enter a password only if a new one is required. Otherwise Leave blank.</p>';
  //so this works..now I just need to fill in the values. shit. hard.
  //so i need to get all the values and..fill them in i guess
  include('scripts/edit_salesperson.php');
}else {
  
    //set the buttons
    $reset = '<input type="reset" value="clear" id="add_sales_reset" />';
    $submit = '<input type="submit" value="Add Salesperson" id="add_sales_btn" name="add_sales_btn"/>';
    $form_sub = '  <form method="POST" action="scripts/add_salesperson.php" id="frm_add_salespersons">';
    $pass_word_field = "";
    $v_id = "";
    $v_sales_first = "";
    $v_sales_last = ""; 
    $v_sales_email ="";
    $v_sales_phone = "";
    $v_sales_mob = "";

    $v_sales_log = "";
    $v_sales_pass = "";

    $heading = "Add Salesperson"; 
  
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
    
    <div class="col-9 log_main sales_main">
    
        <h1><?php echo $heading; ?></h1>
      
   <?php echo $form_sub; ?>
      <h3>Name</h3>
      <label>First Name:</label>
      <input type="text" name="add_sales_first" id="ass_sales_first" value = "<?php echo $v_sales_first; ?>" /> <br/>
      <label>Last Name:</label>
      <input type="text" name="add_sales_last" id="ass_sales_last" value = "<?php echo $v_sales_last; ?>" /> <br/>

      <h3>Contact</h3>
      <label>Email:</label>
      <input type="email" name="add_sales_email" id="ass_sales_email" value = "<?php echo $v_sales_email; ?>" /> <br />
      <label>Home Phone:</label>
      <input type="text" name="add_sales_phone" id="ass_sales_phone" value = "<?php echo $v_sales_phone; ?>" /> <br/>
      <label>Mobile:</label>
      <input type="text" name="add_sales_mobile" id="ass_sales_mobile" value = "<?php echo $v_sales_mob; ?>" /> <br/>

      <h3>Security Details</h3>
      <label>Login Name:</label>
      <input type="text" name="add_sales_login" id="add_sales_login" value = "<?php echo $v_sales_log; ?>"/> <br/>
      <label>Password:</label>
      <input type="text" name="add_sales_pass" id="add_sales_pass"  /> 
      <?php echo $pass_word_field; ?>
      
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