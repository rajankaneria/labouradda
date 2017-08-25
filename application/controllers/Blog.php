<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{

	public function index($blogID = 0)
	{
		$this->load->model("blog_model");
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
		$config['upload_path'] = 'C:\wamp\www\labouradda\html\images\blog';
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
		$data=$_POST['data'];
		$updateID=$_POST['blogID'];

		$config['upload_path'] = './uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size'] = '100';
	    $config['max_width']  = '1024';
	    $config['max_height']  = '768';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;
	    if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
	    $this->load->library('upload', $config);
	    if ( ! $this->upload->do_upload('userfile')) {
	        echo 'error';
	    } else {

	        return array('upload_data' => $this->upload->data());
	    }

	    
		$this->load->model("blog_model");
		$this->blog_model->updateBlog($data,$updateID);
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
	
}

?>