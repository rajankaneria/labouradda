<?php
    $this->load->view("includes/dashboard_header.php",$headerData);
    
	$this->load->view($viewName.".php",$viewData);
    
    $this->load->view("includes/dashboard_footer.php",$footerData); 
?>