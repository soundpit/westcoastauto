<?php

//get all the image paths in the vehicles
$query = "SELECT * FROM vehicle";

$result = mysqli_query($conn,$query);

//now loop through them.

echo "<ul class='slideshow'>";

 //fetch as an array
  while($row = mysqli_fetch_assoc($result)){
    
    $file_name = basename($row['v_image']);
    echo "<li class='slideimage'>$file_name</li>";

  }

echo "</ul>";
?>