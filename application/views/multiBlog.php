<div class="page-container container">
<div class="c-title">Blog Of Labouradda</div>

	<div class="row">
	<div class="col s12 m8">
	<?php foreach ($blogData as $key => $blogRow) { ?>
	<div class="row">

	<div class="col s12 m12">
		<div class="card-panel blog-box-panel" onclick="window.location.href='<?php echo base_url(); ?>blog/id/<?php echo $blogRow["id"]; ?>'">
			<div class="blog-box-container">
				<div class="blog-box-image"><img src="<?php echo base_url(); ?>html/images/blog/<?php echo $blogRow['feature-image']; ?>" /></div>
				<div class="blog-details">
					<div class="blog-title"><?php echo $blogRow["title"]; ?></div>
					<div class="blog-author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $blogRow["author"]; ?></div>
					<div class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo " " . date("jS F, Y ") . "<br>"; ?></div>
					<div class="blog-content"><?php echo substr($blogRow["content"],0,220);?>.....</div>

					<a class="waves-effect waves-light btn read-more-btn">Read More</a>		
					<!--
					<div class="blog-author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $blogRow["author"]; ?></div>
					<div class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $blogRow["createdon"]; ?></div>
					-->
				</div>						
			</div>
		</div>	
	</div>	
	</div>
	<?php } ?>
	</div>
	<div class="col s12 m4 site-bar">
		<div class="card-panel blog-box-panel">
			<div class="blog-box-container site-bar-cont">
			<h5 class="post-title">Recent POSTS</h5>
			<div class="row">
				<div class="col s6 m5"><div class="blog-box-image site-bar-blog-img"><img src="<?php echo base_url(); ?>html/images/blog/2_blog.jpg" /></div></div>
				<div class="col s7 m7">
					
				<div class="blog-details site-bar-details">
					<div class="site-bar-blog-title">Waptag Expo</div>
					<div class="site-bar-blog-author"><i class="fa fa-user site-bar-user" aria-hidden="true"></i>Rupal</div>
					<div class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i>23-4-12 12:23:45</div>
					<!--
					<div class="blog-author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $blogRow["author"]; ?></div>
					<div class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $blogRow["createdon"]; ?></div>
					-->
				</div>
				</div>
			</div>

				<div class="row">
				<div class="col s6 m5"><div class="blog-box-image site-bar-blog-img"><img src="<?php echo base_url(); ?>html/images/blog/2_feature.jpg" /></div></div>
				<div class="col s7 m7">
					
				<div class="blog-details site-bar-details">
					<div class="site-bar-blog-title">Waptag Expo</div>
					<div class="site-bar-blog-author"><i class="fa fa-user site-bar-user" aria-hidden="true"></i>Rupal</div>
					<div class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i>23-4-12 12:23:45</div>

					<!--
					<div class="blog-author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $blogRow["author"]; ?></div>
					<div class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $blogRow["createdon"]; ?></div>
					-->
				</div>
				</div>
			</div>

				<div class="row">
				<div class="col s6 m5"><div class="blog-box-image site-bar-blog-img"><img src="<?php echo base_url(); ?>html/images/blog/37_blog.jpg" /></div></div>
				<div class="col s7 m7">
					
				<div class="blog-details site-bar-details">
					<div class="site-bar-blog-title">Waptag Expo</div>
					<div class="site-bar-blog-author"><i class="fa fa-user site-bar-user" aria-hidden="true"></i>Rupal</div>
					<div class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i>23-4-12 12:23:45</div>
					<!--
					<div class="blog-author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $blogRow["author"]; ?></div>
					<div class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $blogRow["createdon"]; ?></div>
					-->
				</div>
				</div>
			</div>										
			</div>
		</div>
	</div>
	
	</div>	
</div>
