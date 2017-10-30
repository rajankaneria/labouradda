	<div class="modal-title">Blog Image</div>

	<div class="row">
        <form class="col s12" method="POST" id="addBlogImageForm" enctype="multipart/form-data">
          <div class="row">
            <div class="input-field col s10 " style="width: calc(100% - 150px) !important;">
              <input id="image_caption" name="image_caption" type="text" value="" class="validate">
              <label for="caption">Caption</label>
            </div>
            <div class="col s2 select-image-container"><a id="selectBlogImageBtn" href="#!" class="waves-effect waves-light btn blue-grey">Select Image</a></div>

            <input type="file" name="blog-image" id="blog-image" style="display: none;">
          </div>
          <div class="row upload-image-container"><center><a id="uploadBlogImageBtn" href="#!" class="waves-effect waves-light btn">Upload</a></center></div>
          <div class="row">
              <input type="hidden" value="16" name="blog_id" id="blog_id">
          </div>
        </form>
      </div>



      <div class="uploaded-blog-images row"><div class="col s12 m4 manage-blog-image-item" id="blogImage-5">
	<div class="blog-image-container"><img src="http://localhost/labouradda/html/images/blog/16_1505819858_blog.jpg"></div>
	<div class="blog-image-caption">Regular field trips and face to face interactions with our labourers is what cements the concept of Labouradda</div>
	<div class="blog-image-action">
		<a data-image-id="5" href="#!" class="waves-effect waves-light btn red lighten-1 delete-blog-image">Delete</a>
	</div>
</div><div class="col s12 m4 manage-blog-image-item" id="blogImage-6">
	<div class="blog-image-container"><img src="http://localhost/labouradda/html/images/blog/16_1505821465_blog.jpg"></div>
	<div class="blog-image-caption">The inception process had our team toiling day and night, working towards paving a design course for our innovation.</div>
	<div class="blog-image-action">
		<a data-image-id="6" href="#!" class="waves-effect waves-light btn red lighten-1 delete-blog-image">Delete</a>
	</div>
</div><div class="col s12 m4 manage-blog-image-item" id="blogImage-7">
	<div class="blog-image-container"><img src="http://localhost/labouradda/html/images/blog/16_1505821556_blog.jpg"></div>
	<div class="blog-image-caption">The inception process had our team toiling day and night, working towards paving a design course for our innovation.</div>
	<div class="blog-image-action">
		<a data-image-id="7" href="#!" class="waves-effect waves-light btn red lighten-1 delete-blog-image">Delete</a>
	</div>
</div></div>