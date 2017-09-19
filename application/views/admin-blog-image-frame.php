<div class="col s12 m4 manage-blog-image-item" id="blogImage-<?php echo $id; ?>">
	<div class="blog-image-container"><img src="<?php echo base_url(); ?>html/images/blog/<?php echo $image_name; ?>" /></div>
	<div class="blog-image-caption"><?php echo $image_caption; ?></div>
	<div class="blog-image-action">
		<a data-image-id="<?php echo $id; ?>" href="#!" class="waves-effect waves-light btn red lighten-1 delete-blog-image">Delete</a>
	</div>
</div>