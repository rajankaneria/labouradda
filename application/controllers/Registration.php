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
			"viewName" => "registration",
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
		$addhar_photo = $regId."_frontAddhar.".pathinfo($_FILES['addhar_photo']['name'], PATHINFO_EXTENSION);

		$back_photo = $regId."_backAddhar.".pathinfo($_FILES['back_photo']['name'], PATHINFO_EXTENSION);


		$labourer_photo = $regId."_labourer.".pathinfo($_FILES['labourer_photo']['name'], PATHINFO_EXTENSION);
		$updateData = array(
			"addhar_photo" => $addhar_photo,
			"labourer_photo" => $labourer_photo,
			"back_photo"=>$back_photo
		);

		
		// update the name of the images in the database
		$this->blog_model->updateRegister($updateData,$regId);

		//set configuration for the upload library
		//$uploadPath = "./html/images/register";
		$uploadPath = "c:/wamp/www/labouradda/html/images/register";
		$config['max_size'] = '100';
		$config['upload_path'] = $uploadPath;
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;

		    
	    //set name in the config file for the frontAddhar image
	    $config['file_name'] = $regId."_frontAddhar";
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('addhar_photo');

	    //set name in the config file for the backAddhar image
	    $config['file_name'] = $regId."_backAddhar";
	    $this->upload->initialize($config);
	    $this->upload->do_upload('back_photo');	    



		//set name in the config file for the labourer image
	    $config['file_name'] = $regId."_labourer";
	    $this->upload->initialize($config);
	    $this->upload->do_upload('labourer_photo');


	    $this->upload->display_errors();
	    
		}
		


	   /* if (!$this->upload->do_upload('labourer_photo'))
		{
		    $data['error'] = $this->upload->display_errors();
		    $data['include'] = 'pages/classic-register';
		} 
		else {
			    $data['upload_data'] = $this->upload->data();
			    // use custom function to determine if filetype is allowed
			    if (allow_file_type($data['upload_data']['file_ext'])) 
			    {
			        $filename = $data['upload_data']['file_name'];
			    }
			    else
			    {
			        show_error('File type is not allowed!');
			    }
			}
*/
	    
	}

