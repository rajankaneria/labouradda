<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	
	public function index($serviceID = "s1")
	{		
		$headerData = array(
			"pageTitle" => "Services",
			"stylesheet" => array("offer.css","services.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js","offer.js")
		);
		$viewData = array(
			"viewName" => "services",
            "viewData" => array("serviceID"=>$serviceID),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function Daily_wage_Labourers(){
		$this->index("s0");
	}
	public function cleaning(){
		$this->index("s1");
	}
	public function domestic_helpers(){
		$this->index("s2");
	}
	public function Repair_and_Maintenance(){
		$this->index("s3");
	}
	public function Loaders_and_Unloaders(){
		$this->index("s4");
	}
	public function More_than_one_Labour(){
		$this->index("s5");
	}
	public function Tatkaal_labour(){
		$this->index("s6");
	}
	public function Hawkers(){
		$this->index("Hawkers");
	}
}
