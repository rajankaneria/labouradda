<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{

	public function index($blogID = 0)
	{
		/*$this->load->model("blog_model");
		if($blogID == 0){
			//get all blogs
			$blogData = $this->blog_model->allBlog();
			$blogView = "multiBlog";
		}else{
			//get specific blog
			$blogData = $this->blog_model->blogDetails($blogID);
			$blogView = "singleBlog";
		}		


		$headerData = array(
			"pageTitle" => "Blog",
			
			"stylesheet" => array("blog.css")
		);
		$footerData = array(
			"jsFiles" => array()
		);
		$viewData = array(
			"viewName" => $blogView,
            "viewData" => array("blogData" => $blogData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);*/

		//$this->load->model("blog_model");
		$blogView = "staticBlog";
		/*
		if($blogID == 0){
			//get all blogs
			//$blogData = $this->blog_model->allBlog();
			$blogView = "multiBlog";
		}else{
			//get specific blog
			//$blogData = $this->blog_model->blogDetails($blogID);
			$blogView = "singleBlog";
		}*/		


		$headerData = array(
			"pageTitle" => "Blog",
			"stylesheet" => array("blog.css")
		);
		$footerData = array(
			"jsFiles" => array()
		);
		$blogData = array();
		$viewData = array(
			"viewName" => $blogView,
            "viewData" => array("blogData" => $blogData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function id($blogID){
		$this->index($blogID);
	}

	public function addBlog()
	{
		$this->load->model("blog_model");

		//get text data which has been bosted
		$result=array(
			"title"=>$_POST['title'],
			"author"=>$_POST['author'],
			"content"=>$_POST['content']
		);

		//add blog with the text data and get the blog id
		$blogID = $this->blog_model->addBlog($result);

		//Define the file names with blog id with same extension which has been uploaded
		$featureImage = $blogID."_feature.".pathinfo($_FILES['feature-image']['name'], PATHINFO_EXTENSION);
		$blogImage = $blogID."_blog.".pathinfo($_FILES['blog-image']['name'], PATHINFO_EXTENSION);
		$updateData = array(
			"blog-image" => $blogImage,
			"feature-image" => $featureImage
		);
		// update the name of the images in the database
		$this->blog_model->updateBlog($updateData,$blogID);


		//set configuration for the upload library
		$config['upload_path'] = 'C:\xampp\htdocs\labouradda\html\images\blog';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;
	    
	    //set name in the config file for the feature image
	    $config['file_name'] = $blogID."_feature";
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('feature-image');

		//set name in the config file for the blog image
	    $config['file_name'] = $blogID."_blog";
	    $this->upload->initialize($config);
	    $this->upload->do_upload('blog-image');

	}
	public function updateBlog()
	{
		$blogID=$_POST['blogUpdateID'];

		$this->load->model("blog_model");



		//Define the file names with blog id with same extension which has been uploaded
		$featureImage = $blogID."_feature.".pathinfo($_FILES['feature-image']['name'], PATHINFO_EXTENSION);
		$blogImage = $blogID."_blog.".pathinfo($_FILES['blog-image']['name'], PATHINFO_EXTENSION);


		//get text data which has been bosted
		$result=array(
			"title"=>$_POST['title'],
			"author"=>$_POST['author'],
			"content"=>$_POST['content'],
			"blog-image" => $blogImage,
			"feature-image" => $featureImage
		);

		//add blog with the text data and get the blog id
		$this->blog_model->updateBlog($result,$blogID);



		//set configuration for the upload library
		$config['upload_path'] = 'C:\xampp\htdocs\labouradda\html\images\blog';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;
	    
	    //set name in the config file for the feature image
	    $config['file_name'] = $blogID."_feature";
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('feature-image');

		//set name in the config file for the blog image
	    $config['file_name'] = $blogID."_blog";
	    $this->upload->initialize($config);
	    $this->upload->do_upload('blog-image');    

	}
	public function deleteBlog($deleteID)
	{
		$this->load->model("blog_model");
		$this->blog_model->deleteBlog($deleteID);
		
	}
	public function blogDetails($blogID)
	{
		$this->load->model("blog_model");
		$output=$this->blog_model->blogDetails($blogID);
		echo json_encode($output);
	}
	public function allBlog()
	{
		$this->load->model("blog_model");
		$output=$this->blog_model->allBlog();
		echo json_encode($output);
	}

	public function getUpdateData($blogID){
		$this->load->model("blog_model");
		$blogRow=$this->blog_model->blogDetails($blogID);
		$this->load->view("update_blog",array("blogdata"=>$blogRow));
	}

	public function getViewData($blogID){
		$this->load->model("blog_model");
		$blogRow=$this->blog_model->blogDetails($blogID);
		$this->load->view("viewblog",array("blogdata"=>$blogRow));
	}
	
}

?>