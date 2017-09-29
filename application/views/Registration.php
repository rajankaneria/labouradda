<div class="nav-top service-nav-top"></div>
<div class="modal-title">Registration</div>
<div class="row">
<div class="registration-area z-depth-1">
<div class="row">
    <form class="col s12" method="post" id="registerForm" enctype="multipart/form-data">
      <div class="row">  
        <div class="input-field col s12">
          <input type="text" value="" id="full_name" name="full_name" />
          <label for="full_name">Labourer Full Name</label>
        </div>
      
<!--
      <div class="row"> 
      <p>
        <input value="yes" name="radio" type="radio" id="yes" class="with-gap"/>
        <label for="yes">Yes</label>
      </p>
      <p>
        <input value="yes" name="radio" type="radio" id="no" class="with-gap"/>
        <label for="no">No</label>
      </p>
    </div>
-->
      <div class="input-field col s12">
        <input type="text" value="" id="addhar_card" name="addhar_card" />
        <label for="addhar_card">Aadhar Card Number</label>
      </div>
           
      <div class="input-field col s6">
        <input type="file" id="addhar_photo" name="addhar_photo"  style="display: none;" />
        <a href="#" onclick="$('input#addhar_photo').click()" class="btn file-btn">Aadhar Card Photo</a>
        <!-- <label for="addhar_photo">Adhhar Card Photo</label> -->
      </div>
      
      <div class="input-field col s6">
        <input type="file" id="labourer_photo" name="labourer_photo" style="display: none;" />
        <a href="#" onclick="$('input#labourer_photo').click()" class="btn file-btn">Labourer Photo</a>
        <!-- <label for="labourer_photo">Labourer Photo</label> -->
      </div>
      
      <div class="input-field col s12">
        <select name="location">           
          <option value="">Select Location</option>
          <option value="college_chauhara">Engineering College Chauhara</option>
          <option value="goyal_chauhara">Goyal Chauhara</option>
          <option value="tedhi_puliya">Tedhi Puliya</option>         
        </select>
      </div>
      <div class="col s12"> 

          <input type="checkbox" id="smart_phone" name="phone[]" value="Smart Phone" />
          <label for="smart_phone">Smart Phone</label>
       
          <input type="checkbox" id="basic_phone" name="phone[]" value="Basic Phone" />
          <label for="basic_phone" style="margin-left: 15px;">Basic Phone</label>
      </div>       
      </div>
        <div class="input-field col s12">
          <center><input type="button" name="register" id="register" value="Register" class="btn black"></center>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
