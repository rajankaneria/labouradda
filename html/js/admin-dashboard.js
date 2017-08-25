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
		
		var blogdata = new FormData($('#addBlogForm')[0]);
 		$.ajax({
            url: baseurl+"blog/addBlog/",
            type: 'POST',
            processData: false,
            contentType: false,
            data: blogdata,
            success: function (res){
            	console.log(res);
            }
        });


	});

	$(".blog-delete-btn").on("click",function(){
		var blogID = $(this).data("blogid");
		if(confirm("Do you want to delete this Blog?")){
			$.post(baseurl+"blog/deleteBlog/"+blogID,function(data){
				$("tr[data-blogid="+blogID+"]").remove();	
			});
		}
	});

	$("#updateblogdata").on("click",function(){
		var blogdata={
				"title":$("#editModal #title").val(),
				"author":$("#editModal #author").val(),
				"content":$("#editModal #content").val(),
				"feature-image":$("#editModal #feature_image").val(),
				"blog-image":$("#editModal #blog_image").val()
		};
		var blogID = $("#editModal #blogUpdateID").val();
		$.post(baseurl+"blog/updateBlog/",{data:blogdata,blogID:blogID},function(data){		
			window.location.reload();
		});
		
	});

});