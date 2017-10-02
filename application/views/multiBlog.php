<div class="page-container row" style="margin-top: 95px;">
	<div class="col s12 m9">
		<div class="row">
		<?php foreach ($blogData as $key => $blogRow) { ?>
		<div class="col s12 m6 multiblog">
			<div class="card-panel blog-box-panel waves-effect waves-light" onclick="window.location.href='<?php echo base_url(); ?>blog/id/<?php echo $blogRow["id"]; ?>'">
				<div class="blog-box-container">
					<div class="blog-box-image"><img src="<?php echo base_url(); ?>html/images/blog/<?php echo $blogRow["blogImages"][0]['image_name']; ?>" /></div>
					<div class="blog-details">
						<div class="blog-title"><?php echo $blogRow["title"]; ?></div>
						
						<div class="blog-author">-by <span><?php echo $blogRow["author"]; ?></span></div>
						<div class="blog-date"><?php echo date("jS F, Y",strtotime($blogRow["createdon"])); ?></div>

					</div>
							
				</div>
			</div>	
		</div>
		<?php } ?>
		</div>	
	</div>


	<div class="col s12 m3">
			<div class="row">
				<div class="card-panel">
					<div class="side-bar-card-title">Like us on Facebook</div>
					<div class="card-main-content">
						
						<div class="fb-page" data-href="https://www.facebook.com/labouradda/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/labouradda/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/labouradda/">Labouradda</a></blockquote></div>

					</div>
				</div>
			</div>




			<div class="row">
				<div class="card-panel">
					<div class="side-bar-card-title">Featured Blogs</div>
					<div class="card-main-content">
						<?php foreach ($blogData as $key => $blogRow) { ?>
						<div class="latest-blog-item multiblog waves-effect waves-light" onclick='window.location.href="<?php echo base_url(); ?>blog/id/<?php echo $blogRow['id']; ?>"' style="cursor: pointer;">
							<div class="latest-blog-image-container"><div class="blog-image-overlay"></div><img class="responsive-img" src="<?php echo base_url(); ?>html/images/blog/<?php echo $blogRow["blogImages"][0]['image_name']; ?>" /></div>
							<div class="latest-blog-title"><?php echo $blogRow["title"]; ?></div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>


	</div>



</div>
