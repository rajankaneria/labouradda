<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>CodeIgniter - <?php echo $pageTitle; ?></title>
    <!-- CSS-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
     
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<nav class="transparent-nav nav-bar" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img src="<?php echo base_url(); ?>html/images/logo.png" /></a>
      <ul class="desktop-nav-link right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Offering</a></li>
        <li><a href="#">Team</a></li>
        <li><a href="#">How it works</a></li>
        <li><a href="#">Partner</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#"><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons">person</i></a></li>
      </ul>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!">Sign in</a></li>
          <li class="divider"></li>
          <li><a href="#!">Sign up</a></li>
        </ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>