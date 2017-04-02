<?php

?>

<div class="sidebar">
    
<ul>
  <li><a <?php echo test_active($this_page, "view_customers.php"); ?> href="view_customers.php">View Customers</a></li>
  <li><a <?php echo test_active($this_page, "add_customers.php");  ?> href="add_customers.php">Add Customers</a></li>
  <li><a <?php echo test_active($this_page, "add_vehicles.php");  ?> href="add_vehicles.php">Add New Vehicle</a></li>
  <li><a <?php echo test_active($this_page, "view_salespersons.php");  ?> href="view_salespersons.php">View Salesperons</a></li>
  <li><a <?php echo test_active($this_page, "add_salespersons.php");  ?> href="add_salespersons.php">Add Salesperson</a></li>
</ul>
    
</div> <!-- /sidebar -->
  
