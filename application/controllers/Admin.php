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
			"jsFiles" => array("admin.js")
		);
		$viewData = array(
			"viewName" => "admin",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function login()
	{
		$this->load->model("admin_model");
		$res = $_POST["data"];
		$pass= $this->admin_model->login($res);
		echo json_encode($pass);
	}
}
