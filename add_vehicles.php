<?php

$page_title = "Add Vehicle | West Coast Auto";

  include('templates/header.php');

?>

  <!-- row3 -->
  <div class="row" id="row3">
   
   <!-- main -->
  <div class="row" id="main" >
    
    <!-- sidebar -->
    <?php
    
      include ('templates/sidebar.php');
    
    ?>
    
    <div class="col-9 log_main veh_main">
      
      <h1>Add Vehicles:</h1>
      
    <form method="POST" action="scripts/add_vehicles.php" id="frm_add_vehicles" enctype="multipart/form-data">
     
      <label>Stock Number:</label>
      <input type="text" name="add_veh_stock" id="ass_veh_stock" /> <br/>
    
      <label>Year:</label>
      <input type="text" name="add_veh_year" id="ass_veh_year" /> <br/>
    
      <label>Manufacturer:</label>
       	<select name="add_veh_man">
          <option value="toyota">Toyota</option>
          <option value="ford">Ford</option>
          <option value="volkswagon">Volkswagon</option>
          <option value="mazda">Mazda</option>
          <option value="nissan">Nissan</option>
          <option value="hyundai">Hyundai</option>
          <option value="BMW">BMW</option>
          <option value="audi">Audi</option>
         <option value="holden">Holden</option>
        </select> <br/>
      
        <label>Category:</label>
       <select name="add_veh_cat">
          <option value="hatch">Hatch-back</option>
          <option value="sedan">Sedan</option>
          <option value="suv">SUV</option>
          <option value="wagon">Wagon</option>
           <option value="ute">UTE</option>
          <option value="convertible">Convertible</option>
          <option value="coupe">Coupe</option>
          <option value="people">People Mover</option>
         <option value="van">Van</option>
        </select> <br/>
      
       <label>Model:</label>
      <input type="text" name="add_veh_model" id="ass_veh_model" /> <br/>
      
      <label>Price:</label>
      <input type="text" name="add_veh_price" id="ass_veh_price" /> <br/>
      
       <label>Kilometres:</label>
      <input type="text" name="add_veh_kms" id="ass_veh_kms" /> <br/>
      
       <label>VIN:</label>
      <input type="text" name="add_veh_vin" id="ass_veh_vin" /> <br/>
      
       <label>Colour:</label>
      <input type="text" name="add_veh_colour" id="ass_veh_colour" /> <br/>
      
       <label>Seats:</label>
      <input type="text" name="add_veh_seats" id="ass_veh_seats" /> <br/>
      
       <label>Doors:</label>
      <input type="text" name="add_veh_doors" id="ass_veh_doors" /> <br/>
      
       <label>Cylinders:</label>
      <input type="text" name="add_veh_cylinders" id="ass_veh_cylinders" /> <br/>
      
       <label>Drive Type:</label>
         <select name="add_veh_drive">
          <option value="4x4">4x4</option>
          <option value="Front Wheel">Front Wheel</option>
          <option value="Rear Wheel">Rear Wheel</option>
      </select> <br/>
      
         <label>Transmission:</label>
        <select name="add_veh_trans">
        <option value="Automatic">Automatic</option>
          <option value="Manual">Manual</option>
       
      </select> <br/>
      
          <label>Fuel Type:</label>
        <select name="add_veh_fueltype">
        <option value="diesel">Diesel</option>
          <option value="ulp">ULP</option>
       
      </select> <br/>
      
       <label>Fuel Economy (ltr/100kms):</label>
      <input type="text" name="add_veh_economy" id="ass_veh_economy" /> <br/>
      
       <label>Engine Size:</label>
      <input type="text" name="add_veh_esize" id="ass_veh_esize" /> <br/>
      
      <label>Upload Picture:</label>
      <input type="file" name="pic" accept="image/*"> <br />
          
      <input type="reset" value="clear" id="ass_veh_reset" /> 
      <input type="submit" value="Add Vehicle" name="add_veh_btn" id="ass_veh_btn" />
       
    </form>
    
    </div> 
  
  </div>
  
<?php   
    include('templates/footer.php');   
?>