$("#login").on("click",function(){
	var baseurl = $("#base_url").val();
	var data = {
		"username" : $("#username").val();
		"password" : $("#password").val();
	};
	$("#login").html("processing..");
	$.post(baseurl+"admin/login",{data:data},function(data){
		var check = $.parseJSON(data);
		if(check.status=="ok")
		{
			$("#login").html("Redirecting..");
			window.location.href="#";
		}
		else if(check.status=="fail")
		{
			aleret("Fail Your Login");
		}
		else
		{
			console.log(data);
		}

	});
});

