$(document).ready(function(){

      
      
      //Home Animations
	$("#student").click(function(){
    if($("#teacher").hasClass("cardanimation shadow")){
      $("#teacher").removeClass("cardanimation shadow");
    }
    $("#student").addClass("cardanimation shadow");
    
	});
	$("#teacher").click(function(){
    if($("#student").hasClass("cardanimation shadow")){
      $("#student").removeClass("cardanimation shadow");
    }
		$("#teacher").addClass("cardanimation shadow");
		
	});

/*****Dashboard Animations****/


      //Active Navigation
      $(".sidebar").find("a").each(function(e){
 
        if($(this).attr('href') === window.location.hash){
          $(this).addClass('active');
        }
      });
 
    });

