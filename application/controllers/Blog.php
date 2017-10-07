<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{

	public function index($blogID = 0)
	{
		/*
		$this->load->model("blog_model");
		$blogView = "staticBlog";
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
			"stylesheet" => array("blog.css")
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
		*/
		$this->blogList();
	}


	public function blogList(){
		
		$this->load->model("blog_model");

		$blogData = $this->blog_model->allBlog();
		$blogView = "multiBlog";

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
		$this->load->view('blog-template',$viewData);

	}


	public function id($blogID){
		$this->load->model("blog_model");
		$blogData = $this->blog_model->blogDetails($blogID);
		$blogList = $this->blog_model->allBlog();
		$blogRow = array(
				"url" => base_url()."blog/id/".$blogData["id"],
				"content" => substr(strip_tags($blogData["content"]),0,350)."...",
				"title" => $blogData["title"],
				"image" => base_url()."html/images/blog/".$blogData["blogImages"][0]['image_name']
		);
		$shareContainer = $this->load->view("share-layout",$blogRow,TRUE);


		$headerData = array(
			"pageTitle" => "Blog",
			"stylesheet" => array("blog.css"),
			"blogRow"=>$blogRow
		);
		$footerData = array(
			"jsFiles" => array()
		);
		$viewData = array(
			"viewName" => "singleBlog",
            "viewData" => array("blogList"=>$blogList,"blogData" => $blogData,"shareContainer"=>$shareContainer),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('blog-template',$viewData);
		//$this->index($blogID);
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

	}
	public function updateBlog()
	{
		$blogID=$_POST['blogUpdateID'];
		
		$this->load->model("blog_model");

		//get text data which has been posted
		$result=array(
			"title"=>$_POST['title'],
			"author"=>$_POST['author'],
			"content"=>$_POST['updatecontent']
		);
		//add blog with the text data and get the blog id
		$this->blog_model->updateBlog($result,$blogID);

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
		//$this->load->view("update_blog",array("blogdata"=>$blogRow));
		echo json_encode($blogRow);
	}

	public function getViewData($blogID){
		$this->load->model("blog_model");
		$blogRow=$this->blog_model->blogDetails($blogID);
		$this->load->view("viewblog",array("blogdata"=>$blogRow));
	}
	public function getBlogImages($blogID){
		$this->load->model("blog_model");
		$imageList = $this->blog_model->blogImages($blogID);
		foreach ($imageList as $key => $imageRow) {
			$this->load->view("admin-blog-image-frame",$imageRow);
		}
	}
	public function deleteImage($imageID){
		$this->load->model("blog_model");
		$this->blog_model->deleteImage($imageID);
	}


	public function addBlogImage(){
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
		 ini_set('memory_limit','256M');
		ini_set('post_max_size', '256M');
		ini_set('upload_max_filesize', '256M');
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
	    $this->upload->display_errors();

	}
	
}

?>