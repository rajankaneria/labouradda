$(function(){
	$('.modal').modal();
	$(".service-box .offering-container").on("mouseover",function(){
		$(".service-box .offering-container").removeClass("active");
		$(this).addClass("active");

		$("#descriptionContainer #descriptionText").html($(".offering-description",this).html());
		$("#descriptionContainer #descriptionTitle").html($(".offering-title",this).html());
		$("#descriptionContainer").show();
	});
	$(".service-box-mobile .offering-container").on("click",function(){
		$(".service-box-mobile .offering-container").removeClass("active");
		$(this).addClass("active");

		$("#mobileSubService #descriptionContainer #descriptionText").html($(".offering-description",this).html());
		$("#mobileSubService #descriptionContainer #descriptionTitle").html($(".offering-title",this).html());
		$("#mobileSubService #descriptionContainer").show();
		$("#mobileSubService").modal('open');
	});
	$("#mobileSubService .modal-trigger-mobile").on("click",function(){
		$("#mobileSubService").modal('close');
		$("#bookNowModal").modal('open');
	});
});