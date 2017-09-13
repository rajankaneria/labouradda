/* Insert Records */
$("#insert").on("click",function(){
	var baseurl=$('#baseurl').val();
	var data={
		'title': $("#title").val(),
		'author': $('#author').val(),
		'content':$('#content').val(),
		'feature-image':$('#feature-image').val(),
		'blog-image':$('#blog-image').val()
			};
		$.post(baseurl+"Blog/addBlog",{data:data},function(data){
				alert("Record has been Inserted successfully");				

		});
});
/* Update Records */
$('#update').on('click',function(){
var baseurl=$('#baseurl').val(),
var data={
	'id':$("#editModal #blogUpdateID").val(),
	'title':$("#editModal #title").val(),
	'author':$("#editModal #author").val(),
	'content':$("#editModal #content").val(),
	'feature-image':$("#editModal #feature-image").val(),
	'blog-image':$("#editModal #blog-image").val()
};
console.log(data);
$.post(baseurl+"Blog/updateBlog",{data:data},function(data){
	alert("Data has been Updted successfully");
});

});
/* Delete Records */

$('#delete').on(click,function(){
var baseurl=$("#baseurl").val(),
var data={
		'title':$("#title").val(),
		'author':$("#author").val(),
		'content':$("#content").val(),
		'feature-image':$("#feature-image").val(),
		'blog-image':$("#blog-image").val(),
		'createdon':$("#createdon").val()

};

/* View Records */

$('#viewblogdata').on(click,function(){
var baseurl=$("#baseurl").val(),
var data={
		'title':$("#title").val(),
		'author':$("#author").val(),
		'content':$("#content").val(),
		'feature-image':$("#feature-image").val(),
		'blog-image':$("#blog-image").val(),
		'createdon':$("#createdon").val()

};

});
