$(function(){
	var baseurl = $("#base_url").val();
	$('.modal').modal();


	/* blog image management */
	 $(".blog-image-btn").on("click",function(){
	 	$("#addBlogImageModal").modal('open');
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



});