<?php

$page_title = "Welcome to West Coast Auto";

  include('templates/header.php');
  include('scripts/connection.php');

?>
  <!-- row3 -->
  <div class="row" id="row3">
  
    <!-- main -->
  <div class="row main_page" id="main" >
    
    <h1>Welcome to West Coast Auto</h1>
    <h3>Perth's most respected car dealership</h3>
    
  <?php include('scripts/slide_show.php'); ?>
    
    <div class="slidebox" id="slidebox">    
      <img class="slide_image" id="slide_image" alt="slide_image" height="300" >   
    </div>
  
  </div>
    
  <script src="scripts/slide.js" ></script>
  
<?php
    
    include('templates/footer.php');
    
?>