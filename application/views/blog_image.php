<div class="page-container .full-width-container  container">

 <div class="card-panel">

  <div class="page-header">
      <div class="page-title">Blog Image Mangement</div>
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
            <td><img src="<?php echo base_url(); ?>html/images/blog"><?php echo $blogRow["feature-image"]; ?></td>
            <td><?php echo $blogRow["blog-image"]; ?></td>


            <td class="right-align blog-btn">
            <a data-blogid="<?php echo $blogRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey blog-view-btn"><i class="fa fa-eye" aria-hidden="true"></i></a>
              <a data-blogid="<?php echo $blogRow['id']; ?>" class="btn-floating waves-effect waves-light red blog-delete-btn"><i class="material-icons">delete</i></a>
              <a data-blogid="<?php echo $blogRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey blog-edit-btn"><i class="material-icons">mode_edit</i></a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
    </table>
  </div>

  </div>  
</div>
<!-- Modal Structure -->
  <div id="editModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateblogdata" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>


  <!-- Modal Structure -->
  <div id="addModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addBlogImage"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendBlogImageData" href="#!" class="modal-action waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

   <!-- Modal Structure -->
  <div id="viewModal" class="modal">
    <div class="modal-content">
      
    </div>
    <div class="modal-footer">
      <a id="viewblogImagedata" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">view</a>
    </div>
  </div>
</div>

 
