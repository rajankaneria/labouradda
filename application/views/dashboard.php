<div class="page-container .full-width-container  container">

 <div class="card-panel">

  <div class="page-header">
      <div class="page-title">Blog Mangement</div>
      <div class="page-button"><a class="waves-effect waves-light btn" id="addBlogBtn">Add</a></div>
  </div>
  <div class="page-content">
    <table>
      <thead>
          <tr>
              <th>Title</th>
              <th>Author</th>
              <th>Created On</th>
              <th class="right-align">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($blogs as $key => $blogRow) { ?>
          <tr data-blogid='<?php echo $blogRow['id']; ?>'>
            <td><?php echo $blogRow["title"]; ?></td>
            <td><?php echo $blogRow["author"]; ?></td>
            <td><?php echo $blogRow["createdon"]; ?></td>


            <td class="right-align blog-btn">
              <a  data-blogid="<?php echo $blogRow['id']; ?>" data-position="top" data-delay="50" data-tooltip="Add Blog Image"  class="btn-floating waves-effect waves-light blue-grey blog-image-btn tooltipped"><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
            <!--<a data-blogid="<?php echo $blogRow['id']; ?>" data-position="top" data-delay="50" data-tooltip="Preview Blog"  class="btn-floating waves-effect waves-light blue-grey blog-view-btn tooltipped"><i class="fa fa-eye" aria-hidden="true"></i></a>-->
              
              <a data-blogid="<?php echo $blogRow['id']; ?>" data-position="top" data-delay="50" data-tooltip="Edit Blog"  class="btn-floating waves-effect waves-light blue-grey blog-edit-btn tooltipped"><i class="material-icons">mode_edit</i></a>

              <a data-blogid="<?php echo $blogRow['id']; ?>" data-position="top" data-delay="50" data-tooltip="Delete Blog" class="btn-floating waves-effect waves-light red blog-delete-btn tooltipped"><i class="material-icons">delete</i></a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
    </table>
  </div>

  </div>  
</div>

<!-- Modal Structure -->
  <div id="addBlogImageModal" class="modal">
    <div class="modal-content">



      
      <div class="modal-title">Blog Image</div>
      <div class="row">
        <form class="col s12" method="POST" id="addBlogImageForm" enctype="multipart/form-data">
          <div class="row">
            <div class="input-field col s10 " style="width: calc(100% - 150px) !important;">
              <input id="image_caption" name="image_caption" type="text" value="" class="validate" >
              <label for="caption">Caption</label>
            </div>
            <div class="col s2 select-image-container"><a id="selectBlogImageBtn" href="#!" class="waves-effect waves-light btn blue-grey">Select Image</a></div>

            <input type="file" name="blog-image" id="blog-image" style="display: none;" />
          </div>
          <div class="row upload-image-container"><center><a id="uploadBlogImageBtn" href="#!" class="waves-effect waves-light btn">Upload</a></center></div>
          <div class="row">
              <input type="hidden" value="" name="blog_id" id="blog_id">
          </div>
        </form>
      </div>


      
      <div class="uploaded-blog-images row"></div>
      

     </div>

  </div>





<!-- Modal Structure -->
  <div id="editModal" class="modal">
    <div class="modal-content">



      
      <div class="modal-title">Edit Blog</div>
      <div class="row">
        <form class="col s12" method="POST" id="UpdateBlogForm" enctype="multipart/form-data">
          <div class="row">

            <div class="input-field col s6">
              <input id="title" name="title" type="text" value="" class="validate" >
              <label for="title">Title</label>
            </div>

            <div class="input-field col s6">
              <input id="author" name="author" type="text" value="" class="validate">
              <label for="author">Author</label>
            </div>
          


            <div class="row">      
                        
                 <label for="updatecontent">Content</label>
                  <textarea id="updatecontent" name="updatecontent" style="height:12rem !important"></textarea>
                
              </div>      
              <input type="hidden" value="" name="blogUpdateID" id="blogUpdateID">
          </div>
        </form>
      </div>

     </div>

    <div class="modal-footer">
      <a  id="updateblogdata" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>


  <!-- Modal Structure -->
  <div id="addModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addblog"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendblogdata" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

   <!-- Modal Structure -->
  <div id="viewModal" class="modal">
    <div class="modal-content">
      
    </div>
    <div class="modal-footer">
      <a id="viewblogdata" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">view</a>
    </div>
  </div>
</div>

 
