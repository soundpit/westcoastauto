<?php

if (!isset($_POST['add_veh_btn'])){
  echo ("you don't have access to this page");
  die;
}

include('connection.php');

//this is a huge on..get these variables.

$stock_id = $_POST['add_veh_stock'];
$year = $_POST['add_veh_year'];
$manu = $_POST['add_veh_man'];
$category = $_POST['add_veh_cat'];
$model = $_POST['add_veh_model'];
$price = $_POST['add_veh_price'];
$kms = $_POST['add_veh_kms'];
$vin = $_POST['add_veh_vin'];
$colour = $_POST['add_veh_colour'];
$seats = $_POST['add_veh_seats'];
$doors = $_POST['add_veh_doors'];
$cylinders = $_POST['add_veh_cylinders'];
$drive = $_POST['add_veh_drive'];
$trans = $_POST['add_veh_trans'];
$fueltype = $_POST['add_veh_fueltype'];
$economy = $_POST['add_veh_economy'];
$enginesize = $_POST['add_veh_esize'];

if (isset($_POST['pic'])){
  
$image = $_POST['pic'];
  
}else{
  $image = "";
}

//echo $category;
//die();

//the manufacturer key
$man_query = "SELECT * FROM manufacturer WHERE manu_name = '$manu'";
//store the result in a variable
$man_result = mysqli_query($conn,$man_query);
if (!$man_result){
  die("could not get result");
} 
//check to see if therer are any results.
if (mysqli_num_rows($man_result) > 0 ) {
  //we have data
  
  //loop through each row
  //fetch as an array
  while($row = mysqli_fetch_assoc($man_result)){
   $man_key = $row['manu_id'];   
  }
}

//get the category key
//the manufacturer key
$cat_query = "SELECT * FROM category WHERE cat_name = '$category'";
//store the result in a variable
$cat_result = mysqli_query($conn,$cat_query);
if (!$cat_result){
  die("could not get result");
} 
//check to see if therer are any results.
if (mysqli_num_rows($cat_result) > 0 ) {
  //we have data
  
  //loop through each row
  //fetch as an array
  while($row = mysqli_fetch_assoc($cat_result)){
   $cat_key = $row['cat_id'];   
   
  }
}

//now for the file uploading stuff
include('add_image.php');




//create a query
$query =
"INSERT INTO `vehicle` (v_stock_no,
                        v_manu,
                        v_category,
                        v_model,
                        v_price,
                        v_kms,
                        v_vin,
                        v_cylinders,
                        v_fuel_type,
                        v_trans,
                        v_drive_type,
                        v_engine,
                        v_fuel_econo,
                        v_seats,
                        v_doors,
                        v_year,
                        v_image,
                        v_colour)
                     
                VALUES ('$stock_id',
                        '$man_key',
                        '$cat_key',
                        '$model',
                        '$price',
                        '$kms',
                        '$vin',
                        '$cylinders',
                        '$fueltype',
                        '$trans',
                        '$drive',
                        '$enginesize',
                        '$economy',
                        '$seats',
                        '$doors',
                        '$year',
                        '$target_file',
                        '$colour')";
                        
                      
if (mysqli_query($conn, $query)) {
   
  header('location:../used_vehicles.php');
    
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

//close the connection
mysqli_close($conn);

?>