	 	<footer class="page-foote gray" style="background: #1b1b1b;">
          <div class="container">
            <div class="row">
              <div class="col l4 s8">
                <h5 class="footer-title white-text">Contact</h5>
                <div class="footer-text grey-text text-darken-3">
                  <i class="fa fa-envelope" aria-hidden="true"></i>  <a href="maileto:support@labouradda.net">&nbsp;support@labouradda.net</a></div>
                <div class="footer-text grey-text text-darken-3">
                  <i class="fa fa-phone" aria-hidden="true"></i> &nbsp; 079 4800 6541</div>
                <div class="footer-text grey-text text-darken-3"><i class="fa fa-globe" aria-hidden="true"></i> &nbsp;<a href="http://labouradda.net" target="_page"> http://labouradda.net</a></div>
              </div>

              <div class="col l4 s4">
                  <h5 class="footer-title white-text center-align">Connect</h5>
                  <p class="grey-text text-darken-4 center-align">
                    <a href="https://www.facebook.com/labouradda" target="_blank"><i class="social-connect connect-facebook fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="https://in.linkedin.com/in/labouradda-140994135" target="_blank"><i class="social-connect connect-linkedin fa fa-linkedin-square" aria-hidden="true"></i></a>
                  </p>
              </div>

              <div class="col l4 s12 footer-address">
                <h5 class="footer-title white-text right-align">Address</h5>
                <div class="footer-sub-title footer-text grey-text text-darken-3 right-align">Labouradda</div>
                <div class="footer-text grey-text text-darken-3 right-align">F 501, PHASE 1 AKANKSHA SAVVY SWARAAJ,</div>
                <div class="footer-text grey-text text-darken-3 right-align">NEAR JAGATPUR RAILWAY CROSSING,</div>
                <div class="footer-text grey-text text-darken-3 right-align">GOTA. AHMEDABAD. GUJARAT – 382481</div>
              </div>


            </div>
          </div>

          <div class="footer-copyright black f">
            <div class="container">
              <span>Copyright © <a class="copyright-site-link" href="#!">Labouradda</a> 2017</span>
              <a class="footer-link-right right" href="#!">Privacy Policy</a>
              <a class="footer-link-right right" href="<?php echo base_url(); ?>html/images/Disclaimer.docx" target="_blank">Disclaimer</a>
            </div>
          </div>
        </footer>

	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>
</html>