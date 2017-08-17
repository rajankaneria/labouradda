$(function(){
	$(".offering-container").on("mouseover",function(){
		$(".offering-container").removeClass("active");
		$(this).addClass("active");

		$("#descriptionContainer #descriptionText").html($(".offering-description",this).html());
		$("#descriptionContainer #descriptionTitle").html($(".offering-title",this).html());
		$("#descriptionContainer").show();
	})
});