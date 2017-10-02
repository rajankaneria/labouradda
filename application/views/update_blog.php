<div class="modal-title">Edit Blog</div>

<div class="row">
    <form class="col s12" method="POST" id="UpdateBlogForm" enctype="multipart/form-data
">
      <div class="row">

        <div class="input-field col s6">
          <input id="title" name="title" type="text" value="<?php echo $blogdata["title"] ?> " class="validate" >
          <label for="title">Title</label>
        </div>

        <div class="input-field col s6">
          <input id="author" name="author" type="text" value="<?php echo $blogdata["author"] ?> " class="validate">
          <label for="author">Author</label>
        </div>
      


        <div class="row">      
                    
             <label for="content">Content</label>
              <textarea id="updatecontent" name="updatecontent" style="height:12rem !important"><?php echo $blogdata["content"] ?></textarea>
            
          </div>      
          <input type="hidden" value="<?php echo $blogdata["id"] ?>" name="blogUpdateID" id="blogUpdateID">
      </div>
    </form>
</div>