<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function index($modalFlag = 0)
	{		
		$headerData = array(
			"pageTitle" => "Contact",
			"stylesheet" => array("contact.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "contact",
            "viewData" => array("modalFlag" => $modalFlag),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function thankyou(){
		$this->index(1);
	}

	public function failedMail(){
		$this->index(2);
	}

	public function contactSubmit(){
			
			$name=$_POST["name"];
			$mobile=$_POST["mobile"];
			$email=$_POST["email"];
			$msg=$_POST["msg"];

			$to = "webdeveloper.intelliworkz@gmail.com";
			$subject = "Contact Inquiry";

			$message ="
			<body><div style= height:800px; width:99%;margin-top:50px;>
				
			   <table height=200px width=40%>
			   <tr><td>Name:</td><td>$name</td></tr>
			   <tr><td>Phone:</td><td>$mobile</td></tr>
			   <tr><td>E-Mail:</td><td>$email</td></tr>
			   <tr><td>Message:</td><td>$msg</td></tr>		   
			   </table></div></body>";

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: <'.$email.'>' . "\r\n";
			//$headers .= 'Cc:sales@lexcru.com' . "\r\n";
			if(mail($to,$subject,$message,$headers)){
				echo "Mail successfully sent";
				redirect('contact/thankyou');
			}
			else
			{
				echo "Failed Mail successfully sent";
				redirect('contact/failedMail');
			}
			
		
	}

}

