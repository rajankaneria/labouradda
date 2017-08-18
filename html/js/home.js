$(function(){
	$(".how-it-works-container").on("mouseover",function(){
		$(".how-it-works-container").removeClass("active");
		$(this).addClass("active");
		$("#descriptionContainer #descriptionText").html($(".work-description",this).html());
		$("#descriptionContainer #descriptionTitle").html($(".work-title",this).html());
		$("#descriptionContainer").show();
	})
});