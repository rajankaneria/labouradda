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

	$("#addBlogBtn").on("click",function(){		
		$("#addModal").modal('open');

	});
	
	$("#sendblogdata").on("click",function(){		
		var blogdata={
			"title":$("#title").val(),
			"author":$("#author").val(),
			"content":$("#content").val(),
			"feature-image":$("#feature-image").val(),
			"blog-image":$("#blog-image").val()
		};

		$.post(baseurl+"blog/addBlog/",{blogdata:blogdata},function(data){
			$("#addModal").modal('close');	
		});

	});


	$(".blog-delete-btn").on("click",function(){
		$("#data-blogid").remove();

	});


});