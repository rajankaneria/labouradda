<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Contact",
			"stylesheet" => array("contact.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "Contact",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function contactSubmit(){
	
			$first_name=$_POST["first_name"];
			$last_name=$_POST["last_name"];
			$email=$_POST["email"];
			$mobile=$_POST["mobile"];
			$msg=$_POST["msg"];

			$to = "webservices.intelliworkz@gmail.com";
			$subject = "Contact Inquiry";

			$message ="
			<body><div style= height:800px; width:99%;margin-top:50px;>
				
			   <table height=200px width=40%>
			   <tr><td>First Name:</td><td>$first_name</td></tr>
			   <tr><td>Last Name:</td><td>$last_name</td></tr>  
			   <tr><td>Phone:</td><td>$mobile</td></tr>
			   <tr><td>E-Mail:</td><td>$email</td></tr>
			   <tr><td>Address:</td><td>$msg</td></tr>		   
			   </table></div></body>";

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: <'.$email.'>' . "\r\n";
			//$headers .= 'Cc:sales@lexcru.com' . "\r\n";
			if(mail($to,$subject,$message,$headers)){
				echo "Mail successfully sent";
			}
			else
			{
				echo "Mail successfully sent";
			}

		
	}

	public function partnerSubmit(){
		
			$first_name=$_POST["first_name"];
			$last_name=$_POST["last_name"];
			$email=$_POST["email"];
			$mobile=$_POST["mobile"];
			$msg=$_POST["msg"];

			$to = "webservices.intelliworkz@gmail.com";
			$subject = "Partners Inquiry";

			$message ="
			<body><div style= height:800px; width:99%;margin-top:50px;>
				
			   <table height=200px width=40%>
			   <tr><td>First Name:</td><td>$first_name</td></tr>
			   <tr><td>Last Name:</td><td>$last_name</td></tr>  
			   <tr><td>Phone:</td><td>$mobile</td></tr>
			   <tr><td>E-Mail:</td><td>$email</td></tr>
			   <tr><td>Address:</td><td>$msg</td></tr>		   
			   </table></div></body>";

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: <'.$email.'>' . "\r\n";
			//$headers .= 'Cc:sales@lexcru.com' . "\r\n";
			if(mail($to,$subject,$message,$headers)){
				echo "Mail successfully sent";
			}
			else
			{
				echo "Mail successfully sent";
			}

		
			


	}


}
