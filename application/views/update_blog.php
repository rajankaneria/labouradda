
<div class="modal-title">Edit Blog</div>

<div class="row">
    <form class="col s12">
      <div class="row">

        <div class="input-field col s6">
          <input id="title" type="text" value="<?php echo $blogdata["title"] ?> " class="validate">
          <label for="title">Title</label>
        </div>

        <div class="input-field col s6">
          <input id="author" type="text" value="<?php echo $blogdata["author"] ?> " class="validate">
          <label for="author">Author</label>
        </div>
      
      
        <div class="input-field col s6">
          <input id="content" type="text" value="<?php echo $blogdata["content"] ?> " class="validate">
          <label for="content">Content</label>
        </div>
    
      
     
       <div class="input-field col s6">
          <input id="feature_image" type="text" value="<?php echo $blogdata["feature-image"] ?> " class="validate">
          <label for="feature_image">Feature_image</label>
        </div>
      
        <div class="input-field col s6">
          <input id="blog_image" type="text" value="<?php echo $blogdata["blog-image"] ?> " class="validate">
          <label for="blog_image">Blog_image</label>
        </div>

        <div class="input-field col s6">
          <input id="careatedon" type="text"  value="<?php echo $blogdata["createdon"] ?> " class="validate">
          <label for="careatedon">Careatedon</label>
        </div>
          <input type="hidden" value="<?php echo $blogdata["id"] ?>" id="blogUpdateID">
      </div>
    </form>
  </div>