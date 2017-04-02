<?php

$page_title = "Contact | West Coast Auto";

  include('templates/header.php');

?>
  
  <!-- row3 -->
  <div class="row" id="row3"> 
  
   <!-- main -->
  <div class="row main_page" id="main" >
    
    <div id="contact_head">
        <h1>Contact Details</h1>
      <h3><strong>Feel free to get in touch, we'd love to hear from you.</strong></h3>
    </div>
    
    <div id="contact_address">
      <p><strong>West Coast Auto</strong></p> 
      <p>375 Albany Hwy</p>
      <p>Victoria Park</p>
      <p>Perth WA 6100</p>
      <p>Ph: 08 9415 1234</p>
    </div>
		
	<!-- the map div -->
	<div id="map">
		
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.3504683872093!2d152.390656!3d-24.851876999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDUxJzA2LjgiUyAxNTLCsDIzJzI2LjQiRQ!5e0!3m2!1sen!2sau!4v1439378267021" width="580" height="300"  style="border:0" allowfullscreen></iframe> 
	  
	</div> <!-- end map -->
	
    <div id="contact_form">
        <h3>Send us an email:</h3>	
        <form>
			<label for="text">Name:  </label>
			<input type="text" name="text" id="text" /> <br/>
			<label for="email">Email:  </label>
			<input type="email" name="email" id="email"/> </br>
			<label for="question">Your Question: </label><br/>
			<textarea name="question" id="question"></textarea> <br/>
			<input id="con_submit" type="submit" name="submit" value="Submit" />
			<input id="con_reset" type="reset" name="reset" value="Reset" />
        </form>
    </div> <!-- end contact -->
   </div>
  
<?php  
    include('templates/footer.php');  
?>