      <div class="row" style="margin-bottom: 0px;"><div class="modal-title" style="margin-bottom: 0px;float: left;margin-left: 0px;">Blog Section</div><div class="page-button" style="text-align: right"><a class="waves-effect waves-light btn" id="addSectionBtn">Add</a></div></div>
      <div class="modal-sub-title" style="font-size: 18px; color: #6b6b6b; margin-bottom: 5px;"><?php echo $blogRow["title"]; ?></div>



      <table>
        <thead>
          <tr>
              
          </tr>
        </thead>
        <tbody>
          <?php foreach ($sectionList as $key => $sectionRow) { ?>
            <tr data-sectionid="<?php echo $sectionRow['id']; ?>">
              <td><?php echo $sectionRow['title']; ?></td>
              <td class="right-align blog-btn">

              <a data-sectionid="<?php echo $sectionRow['id']; ?>" data-position="top" data-delay="50" data-tooltip="Add Blog Image" class="btn-floating waves-effect waves-light blue-grey section-image-btn tooltipped"><i class="fa fa-file-image-o" aria-hidden="true"></i></a>

              <a data-sectionid="<?php echo $sectionRow['id']; ?>" data-position="top" data-delay="50" data-tooltip="Edit Blog" class="btn-floating waves-effect waves-light blue-grey section-edit-btn tooltipped"><i class="material-icons">mode_edit</i></a>

              <a data-sectionid="<?php echo $sectionRow['id']; ?>" data-position="top" data-delay="50" data-tooltip="Delete Blog" class="btn-floating waves-effect waves-light red section-delete-btn tooltipped"><i class="material-icons">delete</i></a>
            </td>
          </tr>
        <?php } ?>
        <?php if(sizeof($sectionList)==0){ ?>
        <tr><td><div class="no-section-message">This blog does not have any sections yet!</div></td></tr>
        <?php } ?>

      </tbody>
    </table>


