
<div class="modal-title">Edit Blog</div>

<div class="row">
    <form class="col s12" method="post" id="addBlogForm" enctype="multipart/form-data
">
      <div class="row">

        <div class="input-field col s6">
          <input id="title" type="text" value="<?php echo $blogdata["title"] ?> " class="validate">
          <label for="title">Title</label>
        </div>

        <div class="input-field col s6">
          <input id="author" type="text" value="<?php echo $blogdata["author"] ?> " class="validate">
          <label for="author">Author</label>
        </div>
      
    
         <div class="row">
        <div class="col s6 xs-12">          
          <div class="row">      
            <div class="input-field col s6">          
              <label for="feature-image">Featured Image</label>
            </div>
          </div>
          <div class="row">      
            <div class="input-field col s6 xs-12">          
              <input id="feature-image" name="feature-image" type="file" class="validate" value="<?php echo $blogdata["feature-image"] ?>">
            </div>
          </div>
        </div>
      <div class="col s6 xs-12">          
          <div class="row">      
            <div class="input-field col s6">          
              <label for="blog-image">Blog Image</label>
            </div>
          </div>
          <div class="row">      
            <div class="input-field col s6 xs-12">          
              <input id="blog-image" name="blog-image" type="file" class="validate" value="<?php echo $blogdata["blog-image"] ?>">
            </div>
          </div>
        </div>

      
        <div class="input-field col s6">
          <input id="content" type="text" value="<?php echo $blogdata["content"] ?> " class="validate">
          <label for="content">Content</label>
        </div>
      </div>       
          <input type="hidden" value="<?php echo $blogdata["id"] ?>" name="blogUpdateID" id="blogUpdateID">
      </div>
    </form>
  </div>