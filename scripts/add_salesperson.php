<?php

if (!isset($_POST['add_sales_btn'])){
  echo ("you don't have access to this page");
  die;
}

//i need the connection 
include ('connection.php');


//get the variables.

$first = $_POST['add_sales_first'];
$last = $_POST['add_sales_last'];

$email = $_POST['add_sales_email'];
$phone = $_POST['add_sales_phone'];
$mobile = $_POST['add_sales_mobile'];

$login = $_POST['add_sales_login'];
$password = $_POST['add_sales_pass'];


//all these work. so cool. :)

//need to hash the password.
$new_pass = password_hash($password, PASSWORD_DEFAULT);

//add values to the database

if (isset($_GET['id'])){
  
//if there is a get post, that means we are updating and
//NOT creating a new one
 
  
  if (str_replace(' ', '', $password) == "") {
 
  //do not add the password to the update
  $query =
  "UPDATE `salesperson` SET  
                          sales_first = '$first',
                          sales_last = '$last',
                          sales_email = '$email',
                          sales_phone = '$phone',
                          sales_mob = '$mobile',
                          sales_log_name = '$login'
                         

  WHERE `sales_id` ='".$_GET['id']."'";

  }else{
   
  //add the password to the update
  $query =
  "UPDATE `salesperson` SET  
                          sales_first = '$first',
                          sales_last = '$last',
                          sales_email = '$email',
                          sales_phone = '$phone',
                          sales_mob = '$mobile',
                          sales_log_name = '$login',
                          sales_log_pass = '$new_pass'

  WHERE `sales_id` ='".$_GET['id']."'";


  }
  
  
} else {

//create a query
$query =
"INSERT INTO `salesperson` (
                        sales_first,
                        sales_last,
                        sales_email,
                        sales_phone,
                        sales_mob,
                        sales_log_name,
                        sales_log_pass) 
                VALUES (
                        '$first',
                        '$last',
                        '$email',
                        '$phone',
                        '$mobile',
                        '$login',
                        '$new_pass')";
  
}

if (mysqli_query($conn, $query)) {
    
  header('location:../view_salespersons.php');
  
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>