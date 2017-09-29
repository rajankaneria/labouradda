<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{		
		if($this->session->userdata("usernanme"))
		{
			header("location:".base_url()."Dashboard");
		}
		$headerData = array(
			"pageTitle" => "Admin",
			"stylesheet" => array("admin.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js","admin-login.js")
		);
		$viewData = array(
			"viewName" => "admin",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-template',$viewData);
	}
	public function login()
	{
		$this->load->model("admin_model");
		$res = $_POST["data"];
		$pass= $this->admin_model->login($res);
		echo json_encode($pass);
	}
	public function dashboard()
	{		
		if(!$this->session->userdata("username"))
		{
			header("Location:".base_url()."login");
		}

		$this->load->model("blog_model");
		$blogs=$this->blog_model->allBlog();

		$headerData = array(
			"pageTitle" => "Dashboard",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("admin-dashboard.js")
		);
		$viewData = array(
			"viewName" => "dashboard",
            "viewData" => array("blogs" => $blogs),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('dashboard-template',$viewData);
	}

	public function banner(){
		if(!$this->session->userdata("username"))
		{
			header("Location:".base_url()."login");
		}

		$this->load->model("blog_model");
		$blogs=$this->blog_model->allBlog();

		$headerData = array(
			"pageTitle" => "Dashboard",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("admin-dashboard.js")
		);
		$viewData = array(
			"viewName" => "blog_image",
            "viewData" => array("blogs" => $blogs),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('dashboard-template',$viewData);
	}

	public function logout()
	{
		$this->session->unset_userdata("username");
		$this->session->sess_destroy();
		header("Location:".base_url()."admin");
	}
	
	public function registeredData(){
		$this->load->model("blog_model");
		$allRegisterData=$this->blog_model->allRegisterData();
		$headerData = array(
			"pageTitle" => "Registration",
			"stylesheet" => array("dashboard.css","registration.css")
		);
		$footerData = array(
			"jsFiles" => array("registration.js")
		);
		$viewData = array(
			"viewName" => "registration_info",
            "viewData" => array("allRegisterData"=>$allRegisterData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-template',$viewData);
	}
	public function singleView($regID){
		$this->load->model("blog_model");
		$data=$this->blog_model->singleViewData($regID);
		$this->load->view("full_register_info",$data);
	}

}
