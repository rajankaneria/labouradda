<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller {

	
	public function index()
	{		
		if(!$this->session->userdata("username"))
		{
			header("Location:".base_url()."login");
		}
		$headerData = array(
			"pageTitle" => "Dashboard",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "dashboard",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('dashboard-template',$viewData);
	}
	public function logout()
	{
		$this->session->unset_userdata("username");
		$this->session->sess_destroy();
		header("Location:".base_url());
	}
}
