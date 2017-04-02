<?php

include ("connection.php");

$query = "DELETE FROM `salesperson` WHERE sales_id=".$_GET['id']."";

if (mysqli_query($conn, $query)) {
    
    header('location:../view_salespersons.php');
  
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
  
?>