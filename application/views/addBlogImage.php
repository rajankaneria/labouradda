<div class="modal-title">Add Blog Image</div>
<div class="row">
    <form class="col s12" method="post" id="addBlogImageForm" enctype="multipart/form-data">
      <div class="row">      
        <div class="input-field col s12">
          <select name="blog_id">
            <?php foreach($blogs as $key=>$blogRow){ ?>
            <option value="<?php echo $blogRow['id']; ?>"><?php echo $blogRow["title"]; ?></option>
            <?php } ?>
          </select>
          <label for="title">Select Blog</label>
        </div>
      </div>  


      <div class="row">      
        <div class="input-field col s12">
          <input type="text" value="" id="image_caption" name="image_caption" />
          <label for="image_caption">Caption</label>
        </div>
      </div>      

     
      <div class="row">
        <div class="input-field col s12">          
            <input id="blog-image" name="blog-image" type="file" class="validate">
        </div>
      </div>

    </form>
  </div>