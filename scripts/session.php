<?php

//checks to see if the user is curreuntly logged in. if not, then bounce back to
//the log-in page.

//sessions are superglobal variables. they expire when the use closes the browser

session_start(); //starts the session

$_SESSION['username'] = "my name";
$_SESSION['email'] = "emial@email.com";

//unset the session..clear all variables
session_unset();
session_destroy();
echo "you've been logged out";

?>