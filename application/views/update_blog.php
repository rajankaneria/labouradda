
<div class="modal-title">Edit Blog</div>

<div class="row">
    <form class="col s12">
      <div class="row">

        <div class="input-field col s6">
          <input id="Title" type="text" value="<?php echo $blogdata["title"] ?> " class="validate">
          <label for="Title">Title</label>
        </div>

        <div class="input-field col s6">
          <input id="Author" type="text" value="<?php echo $blogdata["author"] ?> " class="validate">
          <label for="Author">Author</label>
        </div>
      
      
        <div class="input-field col s6">
          <input id="Content" type="text" value="<?php echo $blogdata["content"] ?> " class="validate">
          <label for="Content">Content</label>
        </div>
    
      
     
       <div class="input-field col s6">
          <input id="Feature_image" type="text" value="<?php echo $blogdata["feature-image"] ?> " class="validate">
          <label for="Feature_image">Feature_image</label>
        </div>
      
        <div class="input-field col s6">
          <input id="Blog_image" type="text" value="<?php echo $blogdata["blog-image"] ?> " class="validate">
          <label for="Blog_image">Blog_image</label>
        </div>

        <div class="input-field col s6">
          <input id="Careatedon" type="text"  value="<?php echo $blogdata["createdon"] ?> " class="validate">
          <label for="Careatedon">Careatedon</label>
        </div>

      </div>
    </form>
  </div>