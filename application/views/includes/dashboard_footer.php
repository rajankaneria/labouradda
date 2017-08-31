	<footer class="page-foote gray" style="background: #1b1b1b;">


          <div class="footer-copyright black f">
            <div class="container" style="text-align: center;">
              <span>Copyright © <a class="copyright-site-link" href="#!">Labouradda</a> 2017</span>
             
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