<div class="registration-info-area">

 <div class="info-panel-area">

  <div class="info-header">
      <div class="info-title"><center><h5>All Register Data Mangement</h5></center></div>
      <!-- <div class="page-button"><a class="waves-effect waves-light btn" id="addBlogBtn">Add</a></div> -->
  </div>
  <div class="info-conten">

    <div class="labour-registration-form">
      
      <div class="registration-detail row">
        <div class="col s12 m6">
          <div class="registration-label">Name</div>
          <div class="registration-value"><?php echo $full_name; ?></div>
        </div>
        <div class="col s12 m6">
          <div class="registration-label">Location</div>
          <div class="registration-value"><?php echo $labouradda_location; ?></div>
        </div>
      </div>

      <div class="registration-detail row">
        <div class="col s12 m6">
          <div class="registration-label">Phone</div>
          <div class="registration-value"><?php echo $phone; ?></div>
        </div>
        <div class="col s12 m6">
          <div class="registration-label">Aadhar Card</div>
          <div class="registration-value"><?php echo $addhar_card; ?></div>
        </div>
      </div>



      <div class="registration-detail row">
        <div class="register-image-container col s12 m4">
          <div class="lable-name"><label><b>Labourer</b></label></div>
          <img class="responsive-img materialboxed" src="<?php echo base_url() ?>html/images/labour_registration/<?php echo $labourer_photo; ?>">
        </div>
        <div class="register-image-container col s12 m4">
          <div class="lable-name"><label><b>Addhar Front</b></label></div>
          <img class="responsive-img materialboxed" src="<?php echo base_url() ?>html/images/labour_registration/<?php echo $addhar_photo; ?>">
        </div>
        <div class="register-image-container col s12 m4">
          <div class="lable-name"><label><b>Addhar Back</b></label></div>
          <img class="responsive-img materialboxed" src="<?php echo base_url() ?>html/images/labour_registration/<?php echo $back_photo; ?>">
        </div>
      </div>


    </div>
  </div>

  </div>  
</div>



 
