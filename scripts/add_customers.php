
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Add Customers Result</title>
	<meta name="Author" content=""/>
    <link rel="stylesheet" href="../styles/utlities.css">
	<link rel="stylesheet" href="../styles/styles.css">
    
</head>
<body>

<?php

//I need to be able to stop people
//from seeing this page.

if (!isset($_POST['add_cust_btn'])){
  echo ("you don't have access to this page");
  die;
}



//i need the connection 
include ('connection.php');


//get the variables.

$title = $_POST['add_cust_title'];
$first = $_POST['add_cust_first'];
$last = $_POST['add_cust_last'];

$street = $_POST['add_cust_street'];
$city = $_POST['add_cust_city'];
$post = $_POST['add_cust_post'];
$state = $_POST['add_cust_state'];


$email = $_POST['add_cust_email'];
$phone = $_POST['add_cust_phone'];
$mobile = $_POST['add_cust_mobile'];

//all these work. so cool. :)

if (isset($_GET['id'])){
  
//if there is a get post, that means we are updating and
//NOT creating a new one
  
$query =
"UPDATE `customer` SET  cust_title = '$title',
                        cust_first = '$first',
                        cust_last = '$last',
                        cust_street = '$street',
                        cust_sub = '$city',
                        cust_state = '$state',
                        cust_post = '$post',
                        cust_email = '$email',
                        cust_phone = '$phone',
                        cust_mob = '$mobile'
WHERE `cust_id` ='".$_GET['id']."'";
  
} else {

//create a query to add not update :P
$query =
"INSERT INTO `customer` (cust_title,
                        cust_first,
                        cust_last,
                        cust_street,
                        cust_sub,
                        cust_state,
                        cust_post,
                        cust_email,
                        cust_phone,
                        cust_mob) 
                VALUES ('$title',
                        '$first',
                        '$last',
                        '$street',
                        '$city',
                        '$state',
                        '$post',
                        '$email',
                        '$phone',
                        '$mobile')";
  
}

if (mysqli_query($conn, $query)) {
 
  header('location:../view_customers.php');
  
    //go back to the previous page.
    
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>
  
  </body>
</html>