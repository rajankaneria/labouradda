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
        });
    </script>

</head>
<body class="grey lighten-2">
<style type="text/css">
    .me{background: #dedede;}
</style>
<nav class="<?php  if(strtolower($this->uri->segment(1)) == 'home' || $this->uri->segment(1) == '' ){ ?> transparent-nav <?php  } ?> nav-bar" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo base_url(); ?>home" class="brand-logo"><img src="<?php echo base_url(); ?>html/images/logo.png" /></a>
      <ul class="desktop-nav-link right hide-on-med-and-down">
        <li class="<?php if(strtolower($this->uri->segment(1)) == 'home'){ ?>me<?php  } ?>">
            <a href="<?php echo base_url(); ?>home">Home</a>
            <div class="active-item-indicator"></div>
        </li>
        <li class="<?php if(strtolower($this->uri->segment(1)) == 'about'){ ?>me<?php  } ?>">
            <a href="<?php echo base_url(); ?>about">About</a>
            <div class="active-item-indicator"></div>
        </li>
        <li class="<?php if(strtolower($this->uri->segment(1)) == 'services'){ ?>me<?php  } ?>">
            <a href="<?php echo base_url(); ?>services">Services</a>
            <div class="active-item-indicator"></div>
        </li>
        <li class="<?php if(strtolower($this->uri->segment(1)) == 'team'){ ?>me<?php  } ?>">
            <a href="<?php echo base_url(); ?>team" >Team</a>
            <div class="active-item-indicator"></div>
        </li>
        <li class="<?php if(strtolower($this->uri->segment(1)) == 'partners_with_us'){ ?>me<?php  } ?>">
            <a href="<?php echo base_url(); ?>partners_with_us" class="click">Partners with us</a>
            <div class="active-item-indicator"></div>
        </li>
        <li class="<?php if(strtolower($this->uri->segment(1)) == 'contact'){ ?>me<?php  } ?>">
            <a href="<?php echo base_url(); ?>contact">Contact us</a>
            <div class="active-item-indicator"></div>
        </li>
        <li><a href="#"><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons">person</i></a></li>
      </ul>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#bookNowModal" class="modal-trigger">Sign in</a></li>
          <li class="divider"></li>
          <li><a href="#bookNowModal" class="modal-trigger">Sign up</a></li>
        </ul>
      <ul id="nav-mobile" class="side-nav">
        <li class="<?php if(strtolower($this->uri->segment(1)) == 'home'){ ?>me<?php  } ?>">
            <a href="<?php echo base_url(); ?>home">Home</a>
        </li>
        <li class="<?php if(strtolower($this->uri->segment(1)) == 'about'){ ?>me<?php  } ?>">
            <a href="<?php echo base_url(); ?>about">About</a>
        </li>
        <li class="<?php if(strtolower($this->uri->segment(1)) == 'services'){ ?>me<?php  } ?>">
            <a href="<?php echo base_url(); ?>services">Services</a>
        </li>
        <li class="<?php if(strtolower($this->uri->segment(1)) == 'team'){ ?>me<?php  } ?>">
            <a href="<?php echo base_url(); ?>team" >Team</a>
        </li>
        <li class="<?php if(strtolower($this->uri->segment(1)) == 'partners_with_us'){ ?>me<?php  } ?>">
            <a href="<?php echo base_url(); ?>partners_with_us">Partners with us</a>
        </li>
        <li class="<?php if(strtolower($this->uri->segment(1)) == 'contact'){ ?>me<?php  } ?>">
            <a href="<?php echo base_url(); ?>contact">Contact us</a>
        </li>
        <li>
            <a href="http://103.48.64.131/adda">Sign in</a>
        </li>
        <li>
            <a href="http://103.48.64.131/adda">Sign up</a>
        </li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
   <!-- Modal Structure -->
  <div id="bookNowModal" class="modal">
    <div class="modal-content">
      <h4>Thank you</h4>
      <p>Thank you for your booking. Labouradda is coming soon to your neighbourhood.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
          