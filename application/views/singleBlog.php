<?php $blogRow = $blogData; ?>
<div class="page-container container">
	<div class="row">
		<div class="col s12 m12">
			<div class="card-panel">
				<div class="blog-feature-image"><img src="<?php echo base_url(); ?>html/images/blog/<?php echo $blogRow['feature-image']; ?>" /></div>
				<div class="blog-title"><?php echo $blogRow["title"]; ?></div>
				<div class="blog-details">
					<div class="blog-author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $blogRow["author"]; ?></div>
					<div class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $blogRow["createdon"]; ?></div>
				</div>
				<div class="blog-content"><?php echo $blogRow["content"]; ?></div>
			</div>
		</div>
	</div>
</div>