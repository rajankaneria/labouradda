<?php 

	class admin_model extends CI_Model {
       
        public function login($data)
        {
        	$username = $data["username"];
        	$password = md5($data["password"]);
        	$sql = $this->db->query("select * from login where username='$username' and password='$password' ");
        	if($sql->num_rows()==1)
        	{
        		$this->session->set_userdata("username",$username);
        		$output = array(
        			'status' => "ok" ,
        			'message' => "your login succesfully." );
        	}
        	else
        	{
        		$output = array(
        			'status' => "fail" ,
        			'message' => "your login fail." );
        	}
        	return $output;
        }
	}
?>