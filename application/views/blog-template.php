<?php
    $this->load->view("includes/blog-header",$headerData);
    
	$this->load->view($viewName,$viewData);
    
    $this->load->view("includes/blog-footer",$footerData); 
?>