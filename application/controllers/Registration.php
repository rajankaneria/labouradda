<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Registration",
			"stylesheet" => array("dashboard.css","registration.css")
		);
		$footerData = array(
			"jsFiles" => array("registration.js")
		);
		$viewData = array(
			"viewName" => "Registration",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function register(){	
		
		$this->load->model("blog_model");

		//get text data which has been bosted
		$phone=implode(",",$_POST["phone"]);
		$result=array(
			"full_name"=>$_POST['full_name'],
			"addhar_card"=>$_POST['addhar_card'],
			"labouradda_location"=>$_POST['location'],
			"phone" => $phone
		);		
		

		//add blog with the text data and get the blog id
		$regId = $this->blog_model->register($result);

		
		//Define the file names with blog id with same extension which has been uploaded
		$addhar_photo = $regId."_addhar.".pathinfo($_FILES['addhar_photo']['name'], PATHINFO_EXTENSION);
		$labourer_photo = $regId."_labourer.".pathinfo($_FILES['labourer_photo']['name'], PATHINFO_EXTENSION);
		$updateData = array(
			"addhar_photo" => $addhar_photo,
			"labourer_photo" => $labourer_photo
		);
		// update the name of the images in the database
		$this->blog_model->updateRegister($updateData,$regId);


		//set configuration for the upload library
		$config['upload_path'] = 'C:\wamp\www\labouradda\html\images\register';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;
	    
	    //set name in the config file for the feature image
	    $config['file_name'] = $regId."_addhar";
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('addhar_photo');

		//set name in the config file for the blog image
	    $config['file_name'] = $regId."_labourer";
	    $this->upload->initialize($config);
	    $this->upload->do_upload('labourer_photo');	    
	}

}
