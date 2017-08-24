$("#login").on("click",function(){
	var baseurl = $("#base_url").val();
	var data = {
		"username" : $("#username").val(),
		"password" : $("#password").val()
	};
	$("#login").val("processing..");
	$.post(baseurl+"admin/login",{data:data},function(data){
		var check = $.parseJSON(data);
		//console.log(check);
		if(check.status=="ok")
		{
			$("#login").val("Redirecting..");
			window.location.href=baseurl+"admin/dashboard";
		}
		else if(check.status=="fail")
		{
			alert("Fail Your Login");
		}
		else
		{
			console.log(data);
		}

	});
});

