function getBlogImages(blogID){
	var baseurl = $("#base_url").val();
	$("#addBlogImageModal .uploaded-blog-images").html("");
	$.post(baseurl+"blog/getBlogImages/"+blogID,function(data){
	 	$("#addBlogImageModal .uploaded-blog-images").html(data);
	 	initDeleteImage();
	 });
}
function deleteImage(imageID){
	var baseurl = $("#base_url").val();
	$.post(baseurl+"blog/deleteImage/"+imageID,function(data){
		 $("#blogImage-"+imageID).remove();
	});
}
function initDeleteImage(){
	$("#addBlogImageModal .delete-blog-image").on("click",function(data){
		var imageID = $(this).data("image-id");
		deleteImage(imageID);
	});
}
$(function(){
	var baseurl = $("#base_url").val();
	$('.modal').modal();


	/* blog image management */
	 $(".blog-image-btn").on("click",function(){
	 	var blogID = $(this).data("blogid");
	 	$("#addBlogImageForm #blog_id").val(blogID);
	 	getBlogImages(blogID);
	 	$("#addBlogImageModal").modal('open');
	 });
	 $("#selectBlogImageBtn").on("click",function(){
	 	$("#blog-image").click();
	 });
	 $("#uploadBlogImageBtn").on("click",function(){
	 	var blogdata = new FormData($('#addBlogImageForm')[0]);
	 	$("#uploadBlogImageBtn").html("Uploading...");
		$.ajax({
            url: baseurl+"blog/addBlogImage/",
            type: 'POST',
            processData: false,
            contentType: false,
            data: blogdata,
            success: function (res){
           		//alert("Updated Successfully");
           		//window.location.reload();
           		$("#addBlogImageForm #image_caption").val("");
           		$("#uploadBlogImageBtn").html("Upload");
           		getBlogImages($("#addBlogImageForm #blog_id").val());
            }           
        });	
	 });

	 $("#addBlogImageModal .delete-blog-image").on("click",function(data){
	 	var imageID = $(this).data("image-id");
	 	$.post(baseurl+"blog/deleteImage/"+imageID,function(data){
		 	getBlogImages($("#addBlogImageForm #blog_id").val());
		 });
	 });


	/* -------------------- */



	$(".blog-edit-btn").on("click",function(){
		//$("#editModal .modal-content").html("");
		$("#editModal").modal('open');
		var blogID = $(this).data("blogid");
		$.post(baseurl+"blog/getUpdateData/"+blogID,function(data){
			data = $.parseJSON(data);
			$("#editModal #title").val(data.title);
			$("#editModal #author").val(data.author);
			$("#editModal #blogUpdateID").val(data.id);
			$("#editModal #updatecontent").html(data.content);
			//tinyMCE.EditorManager.execCommand('mceRemoveControl',true, "updatecontent");
			console.log()
            tinymce.get('updatecontent').setContent(data.content);
			Materialize.updateTextFields();
		});
	});

	$("#addBlogBtn").on("click",function(){		
		$("#addModal").modal('open');
	});
	
	$("#sendblogdata").on("click",function(){		
		
		$('#content').html( tinymce.get('content').getContent());
		var blogdata = new FormData($('#addBlogForm')[0]);
 		$.ajax({
            url: baseurl+"blog/addBlog/",
            type: 'POST',
            processData: false,
            contentType: false,
            data: blogdata,
            success: function (res){
            	alert("Inserted Successfully");
            	window.location.reload();
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
		$('#updatecontent').html(tinymce.get('updatecontent').getContent());
		var blogdata = new FormData($('#UpdateBlogForm')[0]);
		$.ajax({
            url: baseurl+"blog/updateBlog/",
            type: 'POST',
            processData: false,
            contentType: false,
            data: blogdata,
            success: function (res){
           alert("Updated Successfully");
           window.location.reload();
            }           
           
        });		
	});
        $(".blog-view-btn").on("click",function(){
			$("#viewModal .modal-content").html("");
			$("#viewModal").modal('open');
			var blogID = $(this).data("blogid");
			$.post(baseurl+"blog/getViewData/"+blogID,function(data){
				$("#viewModal .modal-content").html(data);
				
			});
		});


        $("#sendBlogImageData").on("click",function(){
        	var blogdata = new FormData($('#addBlogImageForm')[0]);
			
	 		$.ajax({
	            url: baseurl+"blog/addBlogImage/",
	            type: 'POST',
	            processData: false,
	            contentType: false,
	            data: blogdata,
	            success: function (res){
	            	alert("Inserted Successfully");
	            	window.location.reload();
	            }
        	});
        });


        $(".blog-section-btn").on("click",function(){
			$("#sectionModal").modal('open');
			var blogID = $(this).data("blogid");
			$.post(baseurl+"blog/getUpdateData/"+blogID,function(data){
				data = $.parseJSON(data);
				$("#editModal #title").val(data.title);
				$("#editModal #author").val(data.author);
				$("#editModal #blogUpdateID").val(data.id);
				$("#editModal #updatecontent").html(data.content);
				//tinyMCE.EditorManager.execCommand('mceRemoveControl',true, "updatecontent");
				console.log()
	            tinymce.get('updatecontent').setContent(data.content);
				Materialize.updateTextFields();
			});
        });

        $(".section-image-btn").on("click",function(){
			$("#sectionImageModal").modal('open');
        });

        $(".section-edit-btn").on("click",function(){
			$("#sectionEditModal").modal('open');
        });

         $(".section-delete-btn").on("click",function(){

        });



});