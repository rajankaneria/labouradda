var baseUrl
$(function(){
	$("#register").on("click",function(){
		baseUrl=$("#base_url").val();
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


	});

});