<div class="nav-top"></div>
<div class="container">
  <div class="row">    
    <div class="container">      
      <div class="c-title">Contact Us </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="container">
  <div class="card-panel">
    <form class="container" method="post" action="<?php echo base_url(); ?>contact/contactSubmit">
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate" name="name">
          <label for="last_name">Full Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate" name="mobile">
          <label for="last_name">Mobile</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
      </div>
       <div class="row">
      <div class="input-field col s12">
        <select name="cat" id="cate" class="validate">
            <option value="" disabled selected>Select Enquiry Type</option>
            <option value="1" id="1">No services available for my locality</option>
            <option value="Enlist My Apartment">Enlist My Apartment</option>
            <option value="Request for Booking">Request for Booking</option>
            <option value="Help with an existing order">Help with an existing order</option>
            <option value="Corporate Partnerships and Alliances">Corporate Partnerships and Alliances</option>
            <option value="Careers">Careers</option>
            <option value="Complaints">Complaints</option>
            <option value="Others">Others</option>
        </select>
        <label>Select Enquiry Type</label>
      </div>
      </div>
       <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea" name="msg"></textarea>
              <label for="textarea1">Message</label>
            </div>
          </div>     
      <div class="row">
        <div class="col s12 center-align">
        
         <input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn black">

        </div>
      </div>
     
    </form>
  </div>
  </div>
  </div>

 <!-- Modal Structure -->
  
    <div id="thankyouModal" class="modal" style="top: 30% !important;">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="<?php echo base_url(); ?>contact" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>

   <div id="FailedModal" class="modal" style="top: 30% !important;">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>Something is wrong</p>
      
    </div>
    <div class="modal-footer">
      <a href="<?php echo base_url(); ?>contact" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>


  <script type="text/javascript">
    $('.modal').modal();
    <?php if($modalFlag == 1){ ?>
      $("#thankyouModal").modal('open');
    <?php } else if ($modalFlag == 2) { ?>
      $("#FailedModal").modal('open');
    <?php } ?>
  </script>
