<?php



//this is within the table already built

//create the query
//select all columns
$query = "SELECT * FROM `customer`";

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
    echo   "<td>".$row['cust_id']."</td>";
    echo   "<td>".$row['cust_title']."</td>";
    echo   "<td>".$row['cust_first']."</td>";
    echo   "<td>".$row['cust_last']."</td>";
    echo   "<td>".$row['cust_street']."</td>";
    echo   "<td>".$row['cust_sub']."</td>";
    echo   "<td>".$row['cust_post']."</td>";
    echo   "<td>".$row['cust_state']."</td>";
    echo   "<td>".$row['cust_email']."</td>";
    echo   "<td>".$row['cust_phone']."</td>";
    echo   "<td>".$row['cust_mob']."</td>";
    //add the edit button (for now). to be styled later.
    echo   "<td> <a href='add_customers.php?id=".$row['cust_id']."'>Edit</a>";
    echo   " | ";
     echo   " <a href='scripts/delete_customer.php?id=".$row['cust_id']."'>Delete</a></td>";
    
    echo "</tr>";
  
  }
}




?>