<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{

	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Blog",
			"stylesheet" => array()
		);
		$footerData = array(
			"jsFiles" => array("blog.js")
		);
		$viewData = array(
			"viewName" => "blog",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function addBlog()
	{
		$this->load->model("blog_model");
		$data=$_POST['data'];
		/*
		$result=array(
			"title"=>$result['title'],
			"author"=>$result['author'],
			"content"=>$result['content'],
			"feature-image"=>$result['feature-image'],
			"blog-image"=>$result['	blog-image'],
			"createdon"=>$result['createdon']
			);
		*/
		 $this->blog_model->addBlog($data);
	}
	public function updateBlog()
	{
		$data=$_POST['data'];
		$updateID=$_POST['blogID'];
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