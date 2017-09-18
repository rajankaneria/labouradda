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


		$blogTitle = "Labouradda: Inception and Design";
		$blogDescription = "The inspiration of devising a digital crossroad where demand (consumer) makes direct communication with the supply (manpower) came into being as an urge to find a solution to help an undervalued and humongous section of our society. One morning at an ordinary ‘labour mandi’ is what it took to motivate us to hustle for a platform where the dynamics of labourers and customers is simplified and put into order.";
		$blogURL = "http://labouradda.net/blog";
		$blogImage = "https://lh3.googleusercontent.com/oRlZh2CLUzQ21q9Qjxvg2TH2ZOHzcGUTBTnmXxYs1-xvKZ2GtAS0zE6xYnFAKHWUIOV9ZGFmNVFH_udNbwTAWWr9iMKSGPtfnmh_ydT9hnr-2WGeOMG9XzMHL7TRZpjSR5tNqmpEk3Plv2QtXw";


		$blogRow = array(
				"url" => $blogURL,
				"content" => $blogDescription,
				"title" => $blogTitle,
				"image" => $blogImage
		);
		$shareContainer = $this->load->view("share-layout",$blogRow,TRUE);
		$headerData = array(
			"pageTitle" => "Blog",
			"stylesheet" => array("blog.css"),
			"blogRow" => $blogRow
		);
		$footerData = array(
			"jsFiles" => array()
		);
		$blogData = array();
		$viewData = array(
			"viewName" => $blogView,
            "viewData" => array("blogData" => $blogData,"shareContainer"=>$shareContainer),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('blog-template',$viewData);
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

	public function addBlogImage(){

		$this->load->model("blog_model");

		//get text data which has been bosted
		$blogID = $_POST['blog_id'];
		$imageFileName = $blogID."_".time()."_blog";
		$blogImage = $imageFileName.".".pathinfo($_FILES['blog-image']['name'], PATHINFO_EXTENSION);
		$result=array(
			"blog_id"=>$blogID,
			"image_caption"=>$_POST['image_caption'],
			"image_name"=>$blogImage
		);

		$this->blog_model->addBlogImage($result);

		//set configuration for the upload library
		$config['upload_path'] = 'C:\wamp\www\labouradda\html\images\blog';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;
	    
	    //set name in the config file for the blog image
	    $config['file_name'] = $imageFileName;
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('blog-image');
	}

	public function updateBlog()
	{
		$blogID=$_POST['blogUpdateID'];
		
		$this->load->model("blog_model");



		//Define the file names with blog id with same extension which has been uploaded
		$featureImage = $blogID."_feature.".pathinfo($_FILES['feature-image']['name'], PATHINFO_EXTENSION);
		$blogImage = $blogID."_blog.".pathinfo($_FILES['blog-image']['name'], PATHINFO_EXTENSION);


		//get text data which has been posted
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