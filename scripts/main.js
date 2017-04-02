/*set my linting options to consider jquery and the DOM */

/*jslint browser: true*/
/*global $ */

window.onload = function() {
  
 
  
function designs_lightbox(){
  
  
   
    //do the x-button
	//a simple event handler for this one. don't need addevent listener.
    document.getElementById('close_button').onclick = function (){
        
        document.getElementById('design_lightbox').style.display = "none"; 
    
    };
  
    //sets up a full-screen lightbox for each of the house iamges
    var img_des = document.querySelectorAll(".designs_image");
    
    var i = 0;
    //loop through the classes and add the event listeners
    for (i=0;i<img_des.length;i++){
        
        //for some reason I need to assign the image to a variable 
        //before I attach the event in ie. it works ok for the others
        var x = img_des[i];
        x.addEventListener('click',click_me,false);
        //works!!
      }
     
    function click_me(){
        
   
         //the "this" keyword refers to the element that is clicked.
        //it loads the source and stuff
        document.getElementById('big_img').src = this.src;
        document.getElementById('design_lightbox').style.display = "inherit";
     }
} //end designs_lightbox

//call the function
  

  designs_lightbox();
  
 
   
 
}
