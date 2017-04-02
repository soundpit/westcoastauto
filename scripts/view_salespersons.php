<?php

ini_set('display_errors', 'On');

//this is within the table already built

//create the query
//select all columns
$query = "SELECT * FROM `salesperson`";

//store the result in a variable
$result = mysqli_query($conn,$query);

if (!$result){
  die("could not get result");
}

//check to see if therer are any results.
if (mysqli_num_rows($result) > 0 ) {
  //we have data
  
 
  //loop through each row
  //fetch as an array
  while($row = mysqli_fetch_assoc($result)){
    

  
    echo "<tr>";
    echo   "<td>".$row['sales_id']."</td>";
    echo   "<td>".$row['sales_first']."</td>";
    echo   "<td>".$row['sales_last']."</td>";
    echo   "<td>".$row['sales_email']."</td>";
    echo   "<td>".$row['sales_phone']."</td>";
    echo   "<td>".$row['sales_mob']."</td>";
    echo   "<td>".$row['sales_log_name']."</td>";
   
    echo   "<td><a href='add_salespersons.php?id=".$row['sales_id']."'>Edit</a>";
    echo   " | ";
    echo   " <a href='scripts/delete_salesperson.php?id=".$row['sales_id']."'>Delete</a></td>" ;
    
    echo "</tr>";
  
  }
}




?>