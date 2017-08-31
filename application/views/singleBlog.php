<?php $blogRow = $blogData; ?>

<div class="page-container container" style="margin-top: 95px;">
	<div class="row"> 
    <div class="nav-wrapper" style="float:right;">
      <div class="col s12">
        <a  href="#!" class="breadcrumb" onclick="window.location.href='<?php echo base_url(); ?>blog/'">All Blogs</a>        
        <a  class="breadcrumb active"><?php echo $blogRow["title"]; ?></a>
      </div>
    </div>          
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


