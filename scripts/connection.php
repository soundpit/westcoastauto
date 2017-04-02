<?php

//establish the connection variables.
$servername = '****';
$username = '****';
$dbname = '****';
$password = '****';

//create a connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

//test for a connection
if (!$conn){

  die("Connection failed: ".mysqli_connect_error() );


}
  








?>