<?php

$page_title = "View Salespersons | West Coast Auto";

include('templates/header.php');

  if  (!($_SESSION['logged'] == true)){
    header('location:log_in.php');
  }

include('scripts/connection.php');

?>
<!-- main -->
<div class="row" id="main" >
	<!-- sidebar -->
	<div class=" log_main ">
		<?php
			include ('templates/sidebar.php');
		?>
		<div class="table_container">
			<h1 class="h2heading">Current Sales Staff</h1>
			<table id="table_customers">
				<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Home Phone</th>
				<th>Mobile</th>
				<th>Login Name</th>
				<th></th>
				</tr>
			<?php include ('scripts/view_salespersons.php'); ?>
			</table>
		</div> <!-- /tablecontainer -->
	</div> <!-- /logmain -->
</div>
  
 <?php
    
    include('templates/footer.php');
    
?>