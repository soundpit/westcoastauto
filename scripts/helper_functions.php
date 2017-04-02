<?php

//this function is a simple safety validator for sql injection
function validate_form_data ($form_data) {
  
  //trim and strip and html special
  $form_data = trim( stripslashes( htmlspecialchars( $form_data)));
  //return the variable
  return $form_data;
  
}

function test_active ($current_page,$correct_page) {
  
  if ($current_page == $correct_page) {
    
  $msg = "class = 'active'";
    
    return $msg;
    
  } // end if
  
} //end selected



function test_select ($post_value,$correct_value) {
  
  if ($post_value == $correct_value) {
    
    $msg = "selected";
    
    return $msg;
    
  } //end if
  
} // end selected