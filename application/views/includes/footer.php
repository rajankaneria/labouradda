	 	<footer class="page-foote gray" style="background: #1b1b1b;">
          <div class="container">
            <div class="row">
              <div class="col l6 s6">
                <h5 class="footer-title white-text">Contact</h5>
                <div class="footer-text grey-text text-darken-3">
                  <i class="fa fa-envelope" aria-hidden="true"></i>  <a href="maileto:support@labouradda.net">&nbsp;support@labouradda.net</a></div>
                <div class="footer-text grey-text text-darken-3">
                  <i class="fa fa-phone" aria-hidden="true"></i> &nbsp; 079 4800 6541</div>
                <div class="footer-text grey-text text-darken-3"><i class="fa fa-globe" aria-hidden="true"></i> &nbsp;<a href="http://labouradda.net" target="_page"> http://labouradda.net</a></div>
              </div>


              <div class="col l6 s6">
                 <h5 class="footer-title white-text right-align">Connect</h5>
                  <p class="grey-text text-darken-4 right-align" style="text-align: right !important; ">
                    <a href="https://www.facebook.com/labouradda" target="_blank"><i class="social-connect connect-facebook fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="https://in.linkedin.com/in/labouradda-140994135" target="_blank"><i class="social-connect connect-linkedin fa fa-linkedin-square" aria-hidden="true"></i></a>
                  </p>
              </div>


            </div>
          </div>

          <div class="footer-copyright black f">
            <div class="container">
              <span>Copyright © <a class="copyright-site-link" href="#!">Labouradda</a> 2017</span>
              <a class="footer-link-right right" href="#!">Privacy Policy</a>
              <a class="footer-link-right right" href="<?php echo base_url(); ?>html/images/Disclaimer.docx" target="_blank">Disclaimer</a>
              <a class="footer-link-right right" href="<?php echo base_url(); ?>Registration/" >Labour Registration</a>
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