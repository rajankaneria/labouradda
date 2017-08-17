<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partners_with_us extends CI_Controller {
	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Partners_with_us",
			"stylesheet" => array("contact.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "partners_with_us",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

}
