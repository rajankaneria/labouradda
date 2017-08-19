$(function(){

	$(window).scroll(function (event) {
      	var scroll = $(window).scrollTop();
      	if(scroll >= 100)
      	{
    	    $(".nav-bar").removeClass("transparent-nav");
            //$(".nav-bar").addClass("deep-orange darken-3");
        }
        else
        {
            //$(".nav-bar").removeClass("deep-orange darken-3");
            $(".nav-bar").addClass("transparent-nav");
        }
    });


	$(".how-it-works-container").on("mouseover",function(){
		$(".how-it-works-container").removeClass("active");
		$(this).addClass("active");
		$("#descriptionContainer #descriptionText").html($(".work-description",this).html());
		$("#descriptionContainer #descriptionTitle").html($(".work-title",this).html());
		$("#descriptionContainer").show();
	})
});