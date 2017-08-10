<script type="text/javascript">
  $(function(){
  //scroll fire for nav
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

});
</script>
<div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-item" href="#one!">
      <img src="<?php echo base_url(); ?>html/images/Main-Banner.jpg" />
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <img src="<?php echo base_url(); ?>html/images/slider2.jpg" />
    </div>
    <div class="carousel-item amber white-text" href="#three!">
      <img src="<?php echo base_url(); ?>html/images/Main-Banner.png" />
    </div>

</div>


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
