<?php $blogRow = $blogData; ?>
<script>
	$(function(){
		$(".button-collapse").sideNav();
	});
</script>
<style type="text/css">
	strong{font-weight: normal; !important;}
	p{text-align: justify !important;     font-size: 13px; }
</style>
<div class="page-container" style="margin-top: 95px;">
	<div class="row"> 
<div class="col s12 m9">
	<div class="card-panel">			
		<div class="blog-title"><?php echo $blogRow["title"]; ?></div>
		<div class="blog-details">
			<div class="blog-author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $blogRow["author"]; ?></div>
			<div class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $blogRow["createdon"]; ?></div>
		</div>
		<?php echo $shareContainer; ?>
		<div class="blog-content"><?php echo $blogRow["content"]; ?></div>
	</div>
	<div class="fb-comments" data-href="<?php echo $blogRow['url']; ?>" data-width="100%" data-numposts="5"></div>
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
					<div class="side-bar-card-title">Latest Blogs</div>
					<div class="card-main-content">
						
						<div class="latest-blog-item">
							<div class="latest-blog-image-container"><div class="blog-image-overlay"></div><img alt="C:\Users\SEEMA SEN\Downloads\IMG_1702.JPG" src="https://lh3.googleusercontent.com/oRlZh2CLUzQ21q9Qjxvg2TH2ZOHzcGUTBTnmXxYs1-xvKZ2GtAS0zE6xYnFAKHWUIOV9ZGFmNVFH_udNbwTAWWr9iMKSGPtfnmh_ydT9hnr-2WGeOMG9XzMHL7TRZpjSR5tNqmpEk3Plv2QtXw" style="width: 100%;"></div>
							<div class="latest-blog-title">Labouradda: Inception and Design</div>
						</div>

					</div>
				</div>
			</div>


		</div>



</div>
</div>

