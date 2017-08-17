<script type="text/javascript">
  $(function(){
  //scroll fire for nav
  /*
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if(scroll >= 100)
        {
            $(".nav-bar").removeClass("transparent-nav");
            //$(".nav-bar").addClass("deep-orange darken-3");
        }
        else
        {
            //$(".nav-bar").removeClass("deep-orange darken-3");
            $(".nav-bar").addClass("transparent-nav");
        }
    });
  */
});

</script>
<div class="carousel carousel-slider center z-depth-1" data-indicators="true">
    <!--<div class="carousel-item" href="#one!">
      <img src="<?php echo base_url(); ?>html/images/Main-Banner.jpg" />
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <img src="<?php echo base_url(); ?>html/images/slider2.jpg" />
    </div> -->
    <div class="carousel-item amber white-text" href="#three!">
      <img src="<?php echo base_url(); ?>html/images/Main-Banner.png" />
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <img src="<?php echo base_url(); ?>html/images/Main-Banner-2.png" />
    </div>
<div class="row">
      <i class="fa fa-angle-left fa-2x pre1" aria-hidden="true" onclick="javascript:prev()"></i> 
      <i class="fa fa-angle-right fa-2x nxt1" aria-hidden="true" onclick="javascript:next()"></i>
    </div> 
</div>

<?php /*
<div class="container">
	<div class="row">
		<div class="section-title grey-text text-darken-4">HOW IT WORKS?</div>
      	<div class="col s6 m3">
      		<div class="col-title">Step one</div>
        	<div class="card-panel black">
        	<!---	<div class="background-image"><img src="<?php echo base_url(); ?>html/images/15017588624702118941240.jpg" /></div>-->
    			<div class="card-title"><img src="<?php echo base_url(); ?>html/images/man-talking-with-phone.png" /></div>
    			<div class="card-content">Call us at 088 088 088 88</div>
    		</div>
      	</div>
      	<div class="col s6 m3">
        	<div class="col-title">STEP TWO</div>
        	<div class="card-panel black">        		
    			<div class="card-title"><img src="<?php echo base_url(); ?>html/images/call-center-agent.png" /></div>
    			<div class="card-content">You will receive call from nearest Labouradda</div>
    		</div>
      	</div>
      	<div class="col s6 m3">
        	<div class="col-title">STEP THREE</div>
        	<div class="card-panel black">        		
    			<div class="card-title"><img src="<?php echo base_url(); ?>html/images/signing-the-contract.png" /></div>
    			<div class="card-content">Explain your requirement and get your time & cost estimates</div>
    		</div>
      	</div>
      	<div class="col s6 m3">
        	<div class="col-title ">STEP FOUR</div>
        	<div class="card-panel black">        	
    			<div class="card-title"><img src="<?php echo base_url(); ?>html/images/relax.png" /></div>
    			<div class="card-content">Relax & Enjoy our services</div>
    		</div>
      	</div>
    </div>
</div>
*/?>

<div class="card-panel">
<div class="container">
  <div class="c-title">Our Services</div>
  <p class="c-paragraph">Labouradda is a unique platform that helps in connecting a Consumer to a labourer for Domestic or Commercial use. Just give a missed call at 088 088 088 88 and get a call back for cost and estimation. Explain your requirement to the labourer, then sit back and relax!</p>



    <div class="row" style="position: relative;">
        <a href="Services/cleaning"><div class="offering-container col s12 m2 card-panel">
            <div class="offering-icon white-icon hoverable"><img src="<?php echo base_url(); ?>html/images/cleaning%20and%20maintenance.png" /></div>
            <div class="offering-icon yellow-icon z-depth-3"><img src="<?php echo base_url(); ?>html/images/cleaning%20and%20maintenance-yellow.png" /></div>
            <div class="offering-title">Cleaning & Maintenance</div>
          </div>
        </a>

        <a href="Services/domestic_helpers">
        <div class="offering-container col s12 m2 card-panel">
            <div class="offering-icon white-icon"><img src="<?php echo base_url(); ?>html/images/Domestic%20Helpers.png" /></div>
            <div class="offering-icon yellow-icon"><img src="<?php echo base_url(); ?>html/images/Domestic%20Helpers-yellow.png" /></div>
            <div class="offering-title">Domestic Helpers</div>
        </div>
        </a>

        <a href="services/Repair_and_Maintenance">
        <div class="offering-container col s12 m2 card-panel">
            <div class="offering-icon white-icon"><img src="<?php echo base_url(); ?>html/images/Repair%20&%20Maintenance.png" /></div>
            <div class="offering-icon yellow-icon"><img src="<?php echo base_url(); ?>html/images/Repair%20&%20Maintenance-yellow.png" /></div>
            <div class="offering-title">Repair & Maintenance</div>
        </div>
        </a>

        <a href="services/Loaders_and_Unloaders">
        <div class="offering-container col s12 m2 card-panel">
            <div class="offering-icon white-icon"><img src="<?php echo base_url(); ?>html/images/loader%20unloader.png" /></div>
            <div class="offering-icon yellow-icon"><img src="<?php echo base_url(); ?>html/images/loader%20unloader-yellow.png" /></div>
            <div class="offering-title">Loaders & Unloaders</div>
        </div>
        </a>

        <a href="services/More_than_one_Labour">
        <div class="offering-container col s12 m2 card-panel">
            <div class="offering-icon white-icon"><img src="<?php echo base_url(); ?>html/images/MorethanoneLabourformorethanoneday.png" /></div>
            <div class="offering-icon yellow-icon"><img src="<?php echo base_url(); ?>html/images/MorethanoneLabourformorethanoneday-yellow.png" /></div>
            <div class="offering-title">More than one Labour for more than one day</div>
        </div>
        </a>

        <a href="services/Tatkaal_labour">
        <div class="offering-container col s12 m2 card-panel">
            <div class="offering-icon white-icon"><img src="<?php echo base_url(); ?>html/images/tatkaal%20seva.png" /></div>
            <div class="offering-icon yellow-icon"><img src="<?php echo base_url(); ?>html/images/tatkaal%20seva-yellow.png" /></div>
            <div class="offering-title">Tatkaal labour</div>
        </div>
        </a>
    </div>  
  </div>
</div>

<div class="container" style="margin-bottom: 100px;">
  <div class="row">
    <div class="section-title grey-text text-darken-4">HOW IT WORKS?</div>

    <div class="how-it-works-container card-panel">
      <div class="work-icon"><i class="fa fa-clipboard" aria-hidden="true"></i></div>
      <div class="work-title"><span>Plan</span> karo</div>
      <div class="work-description">Labouradda offers you a choice of booking a labour for any date and time in advance. You may plan
and decide a date and time and connect with labour adda to get a confirmation vide a SMS a day in advance with
details of labour shortlisted for you.</div>
    </div>

    <div class="how-it-works-container card-panel">
      <div class="work-icon"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
      <div class="work-title"><span>Connect</span> karo</div>
      <div class="work-description">There are four ways to connect – (1) Download the Labouradda App, (2) Register a consumer through our website. (3)  Labour adda provides you a choice to register by directly calling up a Labouradda Call center (4) you can also connecting t a Labouradda by giving a miss-call if one is not that tech savvy. For every booking consumer and labourer will have a choice of speaking to each other through our call center using your booking ID. </div>
    </div>


    <div class="how-it-works-container card-panel">
      <div class="work-icon"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i></div>
      <div class="work-title"><span>Select</span> karo</div>
      <div class="work-description">Step 1 - Select the Work of Labour – (1) Cleaning & Maintenance (2) Domestic Helpers (3) Repair & Maintenance (4) Loaders & Unloaders (5) More than One Labour for more than one day (6) Tatkaal Labour </div>
    </div>



    <div class="how-it-works-container card-panel">
      <div class="work-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
      <div class="work-title"><span>Book</span> karo</div>
      <div class="work-description">Raise a request and mention the Pin code with address & Landmark of the location where you need the labour, Provide an alternate number for  a reversion of confirmation. You will receive an instant message acknowledging receipt of your requirement and confirmation message of labour shortlisted for from the location nearest to you. Relax and enjoy the services of an adhaar card holding & a hard working labour. </div>
    </div>



    <div class="how-it-works-container card-panel">
      <div class="work-icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
      <div class="work-title"><span>SMS</span> receive karo</div>
      <div class="work-description">Every lead received by Labouradda is send a SMS acknowledgment on the number provided with a booking ID, followed by another SMS with details that will show a Labour Unique ID allocated to your booking ID along with last four digit of Labour adhaar card for your records and reference.</div>
    </div>

    <div id="descriptionContainer">
      <div id="descriptionTitle"></div>
      <div id="descriptionText"></div>
    </div>

  </div>
</div>

<script type="text/javascript">
  $('.parallax').parallax();
</script>
<div class="parallax-container z-depth-1" id="our_partner">
    <div class="parallax"><img src="<?php echo base_url(); ?>html/images/paralax.jpg"></div>
    <div class="section-title">Our Honorable Partner</div>
    <div class="container">
    <div class="row">
      <div class="col m4 partner-logo">
        <div class="center">
          <img style="margin-top:14px;max-width: 70% !important;" src="<?php echo base_url(); ?>html/images/icreate logo.png">
        </div>
      </div>
      <div class="col m4 partner-logo">
        <div class="center">
          <center><img style="margin-top:14px;max-width: 70% !important;" src="<?php echo base_url(); ?>html/images/knowlarity logo.png"></center>
        </div>
      </div>
      <div class="col m4 partner-logo">
        <div class="center">
          <center><img style="margin-top:14px;max-width: 70% !important;" src="<?php echo base_url(); ?>html/images/Magnum.png"></center>
        </div>
      </div>
    </div>
    </div>
</div>