<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "offer",
			"stylesheet" => array("offer.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js","offer.js")
		);
		$viewData = array(
			"viewName" => "Offer",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
