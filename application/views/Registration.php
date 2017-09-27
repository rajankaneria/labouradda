<div class="modal-title">Registration</div>
<div class="row">
    <form class="col s12" method="post" id="registerForm" enctype="multipart/form-data">
      <div class="row">  

        <div class="row">      
        <div class="input-field col s12">
          <input type="text" value="" id="full_name" name="full_name" />
          <label for="full_name">Labourer Full Name</label>
        </div>
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
    <div class="row">      
        <div class="input-field col s12">
          <input type="text" value="" id="addhar_card" name="addhar_card" />
          <label for="addhar_card">Adhhar Card Number</label>
        </div>
      </div>

      <div class="row">      
        <div class="input-field col s12">
          <input type="file" value="" id="addhar_photo" name="addhar_photo" />
          <label for="addhar_photo">Adhhar Card Photo</label>
        </div>
      </div>

        <div class="row">      
        <div class="input-field col s12">
          <input type="file" value="" id="labourer_photo" name="labourer_photo" />
          <label for="labourer_photo">Labourer Photo</label>
        </div>
      </div>
   
     

        <div class="input-field col s12">
          <select name="location">           
            <option value="college_chauhara">Engineering College Chauhara</option>
            <option value="goyal_chauhara">Goyal Chauhara</option>
            <option value="tedhi_puliya">Tedhi Puliya</option>         
          </select>
          <label for="title">Labouradda Location</label>
        </div>
      </div>  
      <div class="row"> 
         <p>
          <input type="checkbox" id="smart_phone" name="phone[]" value="Smart Phone" />
          <label for="smart_phone">Smart Phone</label>
        </p>
         <p>
          <input type="checkbox" id="basic_phone" name="phone[]" value="Basic Phone" />
          <label for="basic_phone">Basic Phone</label>
        </p>
       </div>       

        <div class="row">
          <input type="button" name="register" id="register" value="Register">
         </div>

       
    </form>
  </div>