<?php

$page_title = "Log In | West Coast Auto";

  include('templates/header.php');

?>

   <!-- row3 -->
  <div class="row" id="row3">
  
  
   <!-- main -->
  <div class="row login_main" id="main" >
    
    <h1>Employee Login.</h1>
     
    <form id="login_form" method="post" action="scripts/login.php">
      <h2>Please Enter Your Username and Password:</h2>
      <label>Username:</label>
      <input type="text" name="login_name" id="login_name" placeholder="admin"/> <br/>
      <label>Password:</label> 
      <input type="password" name="login_pass" id="login_pass" placeholder="admin"/> <br />
    
    <!--<a id="fake_button" href="view_customers.php">Log in</a> -->
      <input type="submit" name="login_btn" id ="login_btn" value="log in" />
    
    </form>
  
  </div>
  
 <?php
    
    include('templates/footer.php');
    
?>