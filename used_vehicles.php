<?php
	$page_title = "Used Vehicles | West Coast Auto";
  	include('templates/header.php');
	include('scripts/connection.php');
?>
  <!-- row3 -->
  <div class="row" id="row3">
  
    <?php
    
    $msg_send = "all";
    
    //get the post variable if it is set
    
    if (isset ($_POST['category_value'])){
      $msg_send = $_POST['category_value'];
    }
    
  
    ?>
  
   <!-- main -->
    
     <!-- this is the lightbox that will go over the top when clicked -->
    <div id="design_lightbox">
        <div id="image_box">
            <img id="big_img" src="#" alt=""/>
            <i id="close_button" class="fa fa-times">close</i>
        </div>
     </div>
    
  <div class="row used_main" id="main" >
    
    <h1>Our Range of Vehicles</h1>
       
    <form method="POST" action="">
     <label>View all, or sort by category:</label>
       <select name="category_value">
          <option  <?php echo test_select($msg_send,"all"); ?> value="all" >View All</option>
          <option <?php echo test_select($msg_send,"hatch"); ?> value="hatch">Hatch-back</option>
          <option  <?php echo test_select($msg_send,"sedan"); ?> value="sedan">Sedan</option>
          <option  <?php echo test_select($msg_send,"suv"); ?> value="suv">SUV</option>
          <option  <?php echo test_select($msg_send,"wagon"); ?> value="wagon">Wagon</option>
          <option  <?php echo test_select($msg_send,"ute"); ?> value="ute">UTE</option>
          <option  <?php echo test_select($msg_send,"convertible"); ?> value="convertible">Convertible</option>
          <option  <?php echo test_select($msg_send,"coupe"); ?> value="coupe">Coupe</option>
          <option  <?php echo test_select($msg_send,"people"); ?> value="people">People Mover</option>
         <option  <?php echo test_select($msg_send,"van"); ?> value="van">Van</option>
        </select> 
      
        <input type="submit" name="cat_submit" value="refine search" id="cat_submit" />
     
    </form>
    
    
    <script src="scripts/main.js" async></script>
    
    </br>
<?php include('scripts/used_vehicles.php'); ?>
  
 <?php
    
    include('templates/footer.php');
    
?>