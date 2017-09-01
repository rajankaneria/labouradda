<div class="page-container .full-width-container container">
<div class="col s12 m3">
    <div class="blog-box-panel" onclick="window.location.href='<?php echo base_url(); ?>blog/id/<?php echo $blogdata["id"]; ?>'">
      <div class="blog-box-container">
        <div class="blog-box-image"><img src="<?php echo base_url(); ?>html/images/blog/<?php echo $blogdata['blog-image']; ?>" /></div>
        <div class="blog-details">
          <div class="blog-title"><?php echo $blogdata["title"]; ?></div>
          
          <div class="blog-author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $blogdata["author"]; ?></div>
          <div class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo date(" jS \ F , Y  ") . "<br>"; ?></div>
          <div class="blog-content"><?php echo $blogdata["content"]; ?></div>
        </div>
            
      </div>
    </div>  
  </div>
  </div>
  
  
 
 


