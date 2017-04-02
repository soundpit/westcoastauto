<?php



//this is within the table already built

//create the query
//select all columns
$query = "SELECT * FROM `salesperson` WHERE `sales_id`=".$_GET['id']."";

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
    
    
  
   
   $v_id = $row['sales_id'];
    
 
    $v_sales_first = $row['sales_first'];
    $v_sales_last = $row['sales_last'];
  
   $v_sales_email = $row['sales_email'];
    $v_sales_phone = $row['sales_phone'];
   $v_sales_mob = $row['sales_mob'];
    $v_sales_log = $row['sales_log_name'];
    $v_sales_pass = $row['sales_log_pass'];
    //only change the password if its different. mmm...
    
    
   
  
  
  }
}




?>