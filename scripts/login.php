<?php 

//check if the page has been properly directed
if (!isset($_POST['login_btn'])){
  echo ("you don't have access to this page");
  die;
}

//start the connection
include('connection.php');

//grab the details
$login_name = $_POST['login_name'];
$login_pass = $_POST['login_pass'];

//now select by username
$query = "SELECT * FROM `salesperson` WHERE `sales_log_name` = '$login_name'";

//check for results
$result = mysqli_query($conn,$query);
if (!$result){
  die("could not get result");
}

//check to see if therer are any results
if (mysqli_num_rows($result) > 0 ) {
  //we have data
  //loop through each row
  //fetch as an array
  while($row = mysqli_fetch_assoc($result)){
   $hashed_pass = $row['sales_log_pass'];   
  $first_name = $row['sales_first'];
   
  }
}

//now use a test to check
if ( password_verify($login_pass,$hashed_pass)) {
  
  //correct login details.
  //start session
  session_start();
  //store session variables.
  $_SESSION['logged'] = true;
  //$_SESSION['username'] = $login_name;
  $_SESSION['username'] = $first_name;
  
 
  //redirect to the page
  //not sure if this works just yet
  header("Location:../view_customers.php");
  
  
  
} else {
  
  //create errormessage
  $login_error = "wrong username/password";

}

//close the connection
mysqli_close($conn);

?>