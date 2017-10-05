<?php $blogRow = $blogData; ?>
<script>
	$(function(){
 		$('.carousel.carousel-slider').carousel({fullWidth: true});
	});
</script>
<style type="text/css">
	
h3 {
    margin-top: 0px;
    font-size: 26px;
}
.image-caption {
  position: absolute;
  bottom: 0;
  background: rgba(0,0,0,0.8);
  width: 100%;
  padding: 20px;
  padding-bottom: 60px;
  color: #fff;
}
.carousel-item {
  position: relative;
}
</style>
<div class="page-container">
	<div class="row">
		<div class="col s12 m9">
			<div class="card-panel">


				<div class="blog-title"><?php echo $blogRow["title"]; ?></div>
				<div class="blog-details">
					<div class="blog-author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $blogRow["author"]; ?></div>
					<div class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $blogRow["createdon"]; ?></div>
				</div>
				<?php echo $shareContainer; ?>


			 	<div class="carousel carousel-slider center" data-indicators="true">
				 	<?php foreach($blogRow["blogImages"] as $key=>$imageRow){ ?>
				    <div class="carousel-item black white-text">
				      <img class="responsive-img" src="<?php echo base_url(); ?>html/images/blog/<?php echo $imageRow['image_name']; ?>" />
				      <div class="image-caption"><?php echo $imageRow['image_caption']; ?></div>
				    </div>
				    <?php } ?>
			  	</div>






				
				<div class="blog-content"><?php echo $blogRow["content"]; ?></div>
			</div>
			<div class="fb-comments" data-href="http://labouradda.net/blog/id/<?php $blogData['id'] ?>" data-width="100%" data-numposts="5"></div>
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
						<?php foreach ($blogList as $key => $blogRow) { ?>
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
</div>