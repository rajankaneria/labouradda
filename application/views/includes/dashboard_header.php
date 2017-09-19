<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Labouradda - <?php echo $pageTitle; ?></title>
    <!-- CSS-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>html/css/mobile-fix.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata|Raleway" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="<?php echo base_url(); ?>html/js/tinymce/jquery.tinymce.min.js"></script>
    <script src="<?php echo base_url(); ?>html/js/tinymce/tinymce.min.js"></script>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
     
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <script src="https://use.fontawesome.com/4c9f41dc36.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script>
        $(document).ready(function (){
            $(".click").click(function (){
                $('html, body').animate({
                    scrollTop: $("#our_partner").offset().top
                }, 2000);
            });
            tinymce.init({
                selector: '#content'
            });
            tinymce.init({
                selector: '#updatecontent'
            });
        });
    </script>

</head>
<body class="grey lighten-2">

<nav class="<?php  if(strtolower($this->uri->segment(1)) == 'home' || $this->uri->segment(1) == '' ){ ?> transparent-nav <?php  } ?> nav-bar" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo base_url(); ?>admin/dashboard" class="brand-logo center-align"><img src="<?php echo base_url(); ?>html/images/logo.png" /></a>

      <!--logout button or link -->
       <a href="logout" ><i class="fa fa-power-off blog-logout-btn " aria-hidden="true"></i></a>
    </div>
  </nav>

  <div id="wrapper" class="active">   
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li><a href="<?php echo base_url(); ?>admin/dashboard">Blog<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <!--<li><a href="<?php echo base_url(); ?>admin/banner">Blog Images<span class="sub_icon glyphicon glyphicon-link"></span></a></li>-->
        </ul>
      </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
              
          </div>
        </div>
      </div>
      
    </div>

    <script type="text/javascript">
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
    </script>