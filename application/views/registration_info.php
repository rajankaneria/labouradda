<div class="page-container .full-width-container  container">

 <div class="card-panel">

  <div class="page-header">
      <div class="page-title">Register Data Mangement</div>
      <!-- <div class="page-button"><a class="waves-effect waves-light btn" id="addBlogBtn">Add</a></div> -->
  </div>
  <div class="page-content">
    <table class="responsive-table">
      <thead>
          <tr>
              <th>Order</th>
              <th>Name</th>
              <th>Addhar Card</th> 
              <th>Labouradda Location</th>            
              <th>Phone</th>             
          </tr>
        </thead>
        <tbody>
          <?php foreach ($allRegisterData as $key => $allRegisterRow) { ?>
          <tr class="reg-view-btn" data-regid='<?php echo $allRegisterRow['id']; ?>'>
            <td><?php echo $allRegisterRow['id']; ?></td>
            <td><?php echo $allRegisterRow["full_name"]; ?></td>
            <td><?php echo $allRegisterRow["addhar_card"]; ?></td>
            <td><?php echo $allRegisterRow["labouradda_location"]; ?></td>
            <td><?php echo $allRegisterRow["phone"]; ?></td>        
          </tr>
          <?php } ?>
        </tbody>
    </table>
  </div>
  </div>  
</div>
<!-- Modal Structure -->
  <div id="viewModal" class="modal">
    <div class="modal-content">
      
    </div>
    <div class="modal-footer">
      <a id="viewblogImagedata" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
</div>

 
