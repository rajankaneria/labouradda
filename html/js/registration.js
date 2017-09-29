var baseUrl
$(function(){
	$("#register").on("click",function(){
		baseUrl=$("#base_url").val();
		var errorFlag = 0;

		if($("#full_name").val() == ""){ errorFlag = 1; }



		if(errorFlag == 0){
			var formdata=new FormData($("#registerForm")[0]);
			$.ajax({
				url:baseUrl+"Registration/register/",
				data:formdata,
				type:"post",
				processData:false,
				contentType:false,
				success:function(result){
					alert("Your Registration are done... Thank you..");
					//window.location.href="#!";
				}

			});
			$("#registerForm input").val("");
			$("#register").val("Register");	
		}else{
			alert("All Fields are required");
		}
		


	});

	$(".reg-view-btn").on("click",function(){	
		var baseUrl=$("#base_url").val();
		$("#viewModal").modal('open');
		var regId=$(this).data('regid');
		$.post(baseUrl+"Admin/singleView/"+regId,function(data){
			$("#viewModal .modal-content").html(data);
		});
	});



});