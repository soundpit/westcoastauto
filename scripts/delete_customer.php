

<?php

include ("connection.php");

$query = "DELETE FROM `customer` WHERE cust_id=".$_GET['id']."";

if (mysqli_query($conn, $query)) {
 
  header('location:../view_customers.php');
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


  
?>