<div class="modal-title">Add Section</div>
<div class="row">
    <form class="col s12" method="post" id="addBlogForm" enctype="multipart/form-data
">
      <div class="row">      
        <div class="input-field col s12">
          <input id="title" name="title" type="text" class="validate">
          <label for="title">Title</label>
        </div>

      </div> 
             

        <div class="row">                 
             <label for="content">Content</label>
              <textarea id="content" name="content" style="height:12rem !important"></textarea>
        </div>
 
     
    </form>

    <a class="btn right" href="#!" id="sectionAdd" onclick="addSection();">Add</a>
    
  </div>