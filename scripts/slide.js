/*set my linting options to consider jquery and the DOM */

/*jslint browser: true*/
/*global $ */

window.onload = function() {
  
  
 
function about_images(){
  
  

    
  
    //get the image element
    var img_element = document.getElementById("slide_image");
  
    //get all the other elements
    var list_elems = document.querySelectorAll(".slideimage");
  
    var x = list_elems.length;
  
   img_element.src = "images/" + list_elems[0].innerHTML;
  
  
 //img_element.src = "images/" + y;
    
  var img_loop = setInterval( function (){swap_image();},3000);
    
    var counter = 1;
    
  
    function swap_image (){
    
        if (counter > 8) {
            //its the last image, start again
            counter = 0;
        }
             
       //  alert (counter);
      
        img_element.src = "images/" + list_elems[counter].innerHTML;
      
      //alert img_element.src;
      
       counter ++;
    }
   
} //end about_images


  about_images();
 
}
