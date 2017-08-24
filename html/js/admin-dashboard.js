$(function(){
	var baseurl = $("#base_url").val();
	$('.modal').modal();
	$(".blog-edit-btn").on("click",function(){
		$("#editModal .modal-content").html("");
		$("#editModal").modal('open');
		var blogID = $(this).data("blogid");
		$.post(baseurl+"blog/getUpdateData/"+blogID,function(data){
			$("#editModal .modal-content").html(data);
			Materialize.updateTextFields();
		});
	});
})