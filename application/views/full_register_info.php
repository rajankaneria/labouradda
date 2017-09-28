<div class="page-container .full-width-container  container">

 <div class="card-panel">

  <div class="page-header">
      <div class="page-title">All Register Data Mangement</div>
      <!-- <div class="page-button"><a class="waves-effect waves-light btn" id="addBlogBtn">Add</a></div> -->
  </div>
  <div class="page-content">
    <table>      
        <tbody> 
        <tr>
          <td><b>Name:</b><?php echo $full_name; ?></td>
        </tr>        
        <tr><td><b>Addhar Card:</b><?php echo $addhar_card; ?></td></tr>          
           <tr><td><b>Phone:</b><?php echo $phone; ?></td></tr>
          <tr><td><b>Labouradda Location:</b><?php echo $labouradda_location; ?></td></tr>
          <td><b>Addhar Photo:</b><img src="<?php echo base_url() ?>html/images/register/<?php echo $addhar_photo; ?>"></td>
          <td><b>Labourer Photo:</b><img src="<?php echo base_url() ?>html/images/register/<?php echo $labourer_photo; ?>"></td>      
        </tr>       
                  
        </tbody>
    </table>
  </div>

  </div>  
</div>



 
