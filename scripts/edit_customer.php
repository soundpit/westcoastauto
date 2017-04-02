<?php

//this is within the table already built

//create the query
//select all columns
$query = "SELECT * FROM `customer` WHERE `cust_id`=".$_GET['id']."";

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
    
   $v_id = $row['cust_id'];
    
    $v_cust_title = $row['cust_title'];
    $v_cust_first = $row['cust_first'];
    $v_cust_last = $row['cust_last'];
    $v_cust_street = $row['cust_street'];
	$v_cust_sub = $row['cust_sub'];
	$v_cust_state = $row['cust_state'];
    $v_cust_post = $row['cust_post'];
   $v_cust_email = $row['cust_email'];
    $v_cust_phone = $row['cust_phone'];
   $v_cust_mob = $row['cust_mob'];
   
  
  
  }
}




?>