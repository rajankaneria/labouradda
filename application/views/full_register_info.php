<div class="registration-info-area">

 <div class="info-panel-area">

  <div class="info-header">
      <div class="info-title"><center><h5>All Register Data Mangement</h5></center></div>
      <!-- <div class="page-button"><a class="waves-effect waves-light btn" id="addBlogBtn">Add</a></div> -->
  </div>
  <div class="info-conten">
    <table>      
        <tbody> 
        <tr>
          <td><b>Name :</b>&nbsp;<span> <?php echo $full_name; ?></span></td>
        </tr>        
        <tr><td><b>Addhar Card :</b> &nbsp; <?php echo $addhar_card; ?></td></tr>          
           <tr><td><b>Phone :</b>&nbsp; <?php echo $phone; ?></td></tr>
          <tr><td><b>Labouradda Location :</b>&nbsp; <?php echo $labouradda_location; ?></td></tr>
          <div class="row">
          <td class="col s12 m6">
             <div class="lable-name"><label><b>Addhar Front Photo :</b></label></div>
            <div>
            &nbsp; <img src="<?php echo base_url() ?>html/images/register/<?php echo $addhar_photo; ?>">
            </div>


            <div class="lable-name"><label><b>Addhar Back Photo :</b></label></div>
            <div>
            &nbsp; <img src="<?php echo base_url() ?>html/images/register/<?php echo $back_photo; ?>">
            </div>           

          </td>
          <td class="col s12 m6">
            <div class="lable-name"><label><b>Labourer Photo :</b></label></div>
            &nbsp; <img src="<?php echo base_url() ?>html/images/register/<?php echo $labourer_photo; ?>">
          </td>      
        </div>
        </tr>       
                  
        </tbody>
    </table>
  </div>

  </div>  
</div>



 
