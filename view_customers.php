<?php

$page_title = "View Customers | West Coast Auto";

include('templates/header.php');
include('scripts/connection.php');


  
//check session
if (!isset($_SESSION['logged'])){
 header('location:log_in.php');
}

?>

<!-- row3 -->
<div class="row" id="row3">

  <!--the header formerly sidebar -->
  <div class="sidebar">
    <ul id="side_nav">
      <li><a class="active" href="view_customers.php">View Customers</a></li>
      <li><a href="add_customers.php">Add Customers</a></li>
      <li><a href="add_vehicles.php">Add New Vehicle</a></li>
      <li><a href="view_salespersons.php">View Salesperons</a></li>
      <li><a href="add_salespersons.php">Add Salesperson</a></li>
    </ul>  
  </div>
     
  <!-- main -->
  <div class="row" id="main" >
   <div class="log_main">
     <h2 class="h2heading">Current Customers:</h2>
     <div class="table_container">
      
        <table id="table_customers">
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Street</th>
            <th>Suburb/City</th>
            <th>PostCode</th>
            <th>State</th>
            <th>Email</th>
            <th>Home Phone</th>
            <th>Mobile</th>
            <!-- and an extra row for delete/edit -->
            <th></th>
          </tr>
          <?php include ('scripts/view_customers.php'); ?> 
        </table>  
      </div> <!--end table container -->
    </div> <!-- end log main -->
  </div> <!-- end main row -->
  
 <?php include('templates/footer.php'); ?>