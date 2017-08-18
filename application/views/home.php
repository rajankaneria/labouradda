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

<div class="row">
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

<div class="card-panel how_it_WORK_box">
<div class="container" style="margin-bottom: 100px;">
  <div class="row">
    <div class="section-title grey-text text-darken-4">HOW IT WORKS?</div>

    <div class="how-it-works-container card-panel col m4">
      <div class="work-icon"><i class="fa fa-clipboard" aria-hidden="true"></i></div>
      <div class="work-title"><span>Plan</span> karo</div>
      <div class="work-description"><p>Book a labour for the service of your choice in advance.</p></div>
    </div>

    <div class="how-it-works-container card-panel col m4">
      <div class="work-icon"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
      <div class="work-title"><span>Connect</span> karo</div>
      <div class="work-description">
        <li>Download the Labouradda App. </li>
        <li>Register yourself as a consumer. </li>
        <li>Select the Service you want.</li>
        <li>Book the labour for the date and time of your choice (Consumer and labourer will have a choice of speaking to each other through our call center using their booking ID).</li>

      </div>
    </div>


   <!-- <div class="how-it-works-container card-panel">
      <div class="work-icon"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i></div>
      <div class="work-title"><span>Select</span> karo</div>
      <div class="work-description">Step 1 - Select the Work of Labour – (1) Cleaning & Maintenance (2) Domestic Helpers (3) Repair & Maintenance (4) Loaders & Unloaders (5) More than One Labour for more than one day (6) Tatkaal Labour </div>
    </div> -->


    <!--
    <div class="how-it-works-container card-panel">
      <div class="work-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
      <div class="work-title"><span>Book</span> karo</div>
      <div class="work-description">Raise a request and mention the Pin code with address & Landmark of the location where you need the labour, Provide an alternate number for  a reversion of confirmation. You will receive an instant message acknowledging receipt of your requirement and confirmation message of labour shortlisted for from the location nearest to you. Relax and enjoy the services of an adhaar card holding & a hard working labour. </div>
    </div> -->



    <div class="how-it-works-container card-panel col m4">
      <div class="work-icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
      <div class="work-title"><span>Receive </span>karo</div>
      <div class="work-description"><p>
        Post booking, you will receive an acknowledgment SMS enlisting your booking ID followed by a confirmation SMS containing the Labour Unique ID allocated to your booking ID.  LabourAdda will also share the last four digits of the allocated labour's adhaar number for your record and reference.
      </p></div>
    </div>

    <div id="descriptionContainer">
      <div id="descriptionTitle"></div>
      <div id="descriptionText"></div>
    </div>

  </div>
</div>
</div>

<div class="row"><div class="pad-20"></div>
  <div class="container">
    <div class="col m4">
      <div class="abt-box" style="min-height: auto !important;">
                <span class="fa-stack fa-2x about-us-icons">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-phone fa-stack-1x" style="color: #E0E0E0;"></i>
                    </span>
                    <!-- <img src="images/about-02.jpg" class="img-responsive" alt=".."> -->
                    <h4>Speak Directly to the Labourers </h4>
                    <div class="border"></div>
                    <!-- <p>Duis aute irure dolor in reprehen derit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Lorem reprehenderit</p> -->
                </div>
    </div>

    <div class="col m4">
      <div class="abt-box" style="min-height: auto !important;">
                <div class="welcome-section text-center">
                    <span class="fa-stack fa-2x about-us-icons">
                      <i class="fa fa-certificate fa-stack-2x"></i>
                      <i class="fa fa-check fa-stack-1x inner-icon" style="color: #E0E0E0;"></i>
                    </span>
                    <!-- <img src="images/about-01.jpg" class="img-responsive" alt=".."> -->
                    <h4>Verified and Trusted Labourers</h4>
                    <div class="border"></div>
                    <!-- <p>Duis aute irure dolor in reprehen derit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Lorem reprehenderit</p> -->
                </div>
            </div>
    </div>

    <div class="col m4">
      <div class="abt-box" style="min-height: auto !important;">
                    <span class="fa-stack fa-2x about-us-icons">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-money fa-stack-1x inner-icon" style="color: #E0E0E0;"></i>
                    </span>
                                        <!-- <img src="images/about-03.jpg" class="img-responsive" alt=".."> -->
                    <h4>Pay Directly to the Labourers</h4>
                    <div class="border"></div>
                    <!-- <p>Duis aute irure dolor in reprehen derit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Lorem reprehenderit</p> -->
                </div>
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