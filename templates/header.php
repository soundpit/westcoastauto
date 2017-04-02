<?php

 	session_start();
	include ('scripts/helper_functions.php');

	//get the name of the page and check for active.
	$this_page = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
	<meta name="Author" content=""/>
    <link rel="stylesheet" href="styles/utlities.css">
	<link rel="stylesheet" href="styles/styles.css">
    
</head>
<body>
  
    <!-- top banner -->
  <div class="row top_header">
    <div class="right_top">
      <ul>
        <li><a href="index.php">Home</a></li>
        <?php     
			if (!isset($_SESSION['logged'])){
			  //user is not logged in
			 echo '<li><a href="log_in.php">Employee Login</a></li>';
			} else {

			   echo  '<li><a href="scripts/log_out.php">Welcome <strong>'.$_SESSION["username"].'</strong> - Log out</a></li>';
			}
        ?>
        <li><a href="privacy_policy.php">Privacy Policy</a></li>
      </ul>
    </div>
  </div>
  

  <!-- header with nav -->
  <div class="row" id="row2">
  
    <!-- main banner -->
  <div class="row header">
    <!--img-->
    <div class="col-6" id="header_left">
      <a href='index.php'><img src="images/west_coast_auto_logo.png" alt="West Coast Auto" /> </a>
    </div>
    
    <!-- details -->
    <div class="col-6" id="header_right">
      <p>West Coast Auto</p> <br/>
      <p>375 Albany Hwy</p><br/>
      <p>Victoria Park</p><br/>
      <p>Perth WA 6100</p><br/>
      <p>Ph: 08 9415 1234</p><br/>
    </div>
  </div>
  
  <!-- nav -->
  <nav class="row" id="nav_bar"> 
    <ul id="main_nav" >
      <li><a  <?php echo test_active($this_page, "index.php"); ?> href="index.php">Home</a></li>
      <li><a  <?php echo test_active($this_page, "about.php"); ?> href="about.php">About</a></li>
      <li><a  <?php echo test_active($this_page, "specials.php"); ?> href="specials.php">Specials</a></li>
      <li><a  <?php echo test_active($this_page, "used_vehicles.php"); ?> href="used_vehicles.php">Used Vehicles</a></li>
      <li><a  <?php echo test_active($this_page, "finance.php"); ?> href="finance.php">Finance</a></li>
      <li><a  <?php echo test_active($this_page, "testimonials.php"); ?> href="testimonials.php">Testimonials</a></li>
      <li><a  <?php echo test_active($this_page, "contact.php"); ?> href="contact.php">Contact</a></li>
      <?php
        //the admin button needs a little more attention
        if (isset($_SESSION['logged'])){
          
        if ($this_page == "view_customers.php" ||
            $this_page == "view_salespersons.php" ||
            $this_page == "add_vehicles.php" ||
            $this_page == "add_customers.php" ||
            $this_page == "add_salespersons.php"){
            
          //the user is logged in AND it's one of these pages
          echo " <li><a class = 'active' href='view_customers.php'>Admin Area</a></li>";
          
        }else{
          
          //logged in but NOT on the admn page
          echo " <li><a href='view_customers.php'>Admin Area</a></li>";
          
        }//end if
          
        } //end if
    ?>
    </ul> 
  </nav>
  
  </div> <!-- end row2 -->