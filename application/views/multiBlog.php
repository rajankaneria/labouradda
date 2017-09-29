<div class="page-container container">
	<div class="row">
	<?php foreach ($blogData as $key => $blogRow) { ?>
	<div class="col s12 m3">
		<div class="card-panel blog-box-panel" onclick="window.location.href='<?php echo base_url(); ?>blog/id/<?php echo $blogRow["id"]; ?>'">
			<div class="blog-box-container">
				<div class="blog-box-image"><img src="<?php echo base_url(); ?>html/images/blog/<?php echo $blogRow['blog-image']; ?>" /></div>
				<div class="blog-details">
					<div class="blog-title"><?php echo $blogRow["title"]; ?></div>
					<!--
					<div class="blog-author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $blogRow["author"]; ?></div>
					<div class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $blogRow["createdon"]; ?></div>
					-->
				</div>
						
			</div>
		</div>	
	</div>
	<?php } ?>
	</div>	
</div>
