<?php



if (isset($_POST['category_value'])){
  
  //determine which value was done
  //php is case sensitive here. shit.
  if ($_POST['category_value'] == "all") {
    
   $query = "SELECT * FROM `vehicle`";
    
  }else{
    $cat_val = $_POST['category_value'];
    
    //get the category key again.
    $query = "SELECT * FROM `category` WHERE cat_name ='$cat_val'";
    
  
    
    $result = mysqli_query($conn,$query);
    
    //now fetch the id
    while ($cat_row = mysqli_fetch_assoc($result)){
      
      $cat_id = $cat_row['cat_id'];
      
    } //end while
    
  
    //we have the number now create the query.
  $query = "SELECT * FROM `vehicle` WHERE v_category = $cat_id";
    
  }//end if
  

  
}else {
  
    $query = "SELECT * FROM `vehicle`";
}



//this is within the table already built


//store the result in a variable
$result = mysqli_query($conn,$query);

if (!$result){
  die("could not get result");
}

//echo mysqli_num_rows($result);
//die();

//check to see if therer are any results.
if (mysqli_num_rows($result) > 0 ) {
  //we have data
  
  //loop through each row
  //fetch as an array
  while($row = mysqli_fetch_assoc($result)){
    

    
echo '<div class="row vehicle_box">';
    
//get the manufacturer name from the table
$query = "SELECT * FROM `manufacturer` WHERE manu_id=".$row['v_manu']." LIMIT 1";
    
$man_result = mysqli_query($conn,$query);
    
  while($new_row = mysqli_fetch_assoc($man_result)){
    
    $man = $new_row['manu_name'];
  }
 
    
 
//get the category name from the table.
$query = "SELECT * FROM `category` WHERE cat_id=".$row['v_category']." LIMIT 1";
    
$cat_result = mysqli_query($conn,$query);
    
  while($new_cat = mysqli_fetch_assoc($cat_result)){
    
    $cat = $new_cat['cat_name'];
  }
    
//get the filename for the pic
$pic_name = "images/". basename($row['v_image']);
    

  
     
echo '<div class="row banner">';
    
echo '<h2 class="title col-9">'.$row['v_year'].' '.ucfirst($man).' '.$row['v_model'].' '.ucfirst($cat).'</h2>'; 
echo '<h2 class="price col-3">$'.$row['v_price'].'</h2>';     
echo '</div>';  
echo '<div class="row vbox_main">';
        
echo '<div class="col-4">';
echo '<img class="designs_image" src="'.$pic_name.'" alt="car text" height="100" />';

   // echo $pic_name;
echo '</div>';
        
echo '<div class="col-4">';
echo'<ul>';
echo'<li>'.$row['v_colour'].'</li>';
echo'<li>'.$row['v_doors'].' doors</li>';
echo'<li>'.$row['v_seats'].' seats</li>';
echo'<li>'.$row['v_kms'].' kms</li>';
echo'<li>'.$row['v_vin'].'</li>';
echo'<li>'.$row['v_fuel_econo'].' litres/1000km</li>';
echo'</ul>';
echo'</div>';
    
echo '<div class="col-4">';
echo'<ul>';
echo'<li>'.$row['v_cylinders'].' cylinders</li>';
echo'<li>'.$row['v_engine'].' litre engine</li>';
echo'<li>'.$row['v_drive_type'].' drive</li>';
echo'<li>'.$row['v_trans'].' Transmission</li>';
echo'<li>'.$row['v_fuel_type'].'</li>';

echo'</ul>';
echo'</div>';
    
        
      
echo '</div>';
echo '</div> <!-- end vehicle 1 -->';
 
  
  }
}




?>
