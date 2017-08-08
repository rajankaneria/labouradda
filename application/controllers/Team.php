<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "team",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "Team",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
