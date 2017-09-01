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
	public function logout()
	{
		$this->session->unset_userdata("username");
		$this->session->sess_destroy();
		header("Location:".base_url()."admin");
	}

}
