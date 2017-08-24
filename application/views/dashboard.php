<div class="page-container container">
  <div class="card-panel">

  <div class="page-header">
      <div class="page-title">Blog Mangement</div>
      <div class="page-button"><a class="waves-effect waves-light btn">Add</a></div>
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
          <tr>
            <td><?php echo $blogRow["title"]; ?></td>
            <td><?php echo $blogRow["author"]; ?></td>
            <td><?php echo $blogRow["createdon"]; ?></td>
            <td class="right-align blog-btn">
              <a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>
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
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>