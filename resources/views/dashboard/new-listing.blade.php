@include('includes.header');
<div class="content">
       
          <div class="container-fluid">
            <div class="row new-course-form">
             
                  <form  method="POST" class="form-horizontal" role="form" action="/add-new-listing" enctype="multipart/form-data" id="new-form" style="width:100%">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="row common mx-0">  
                <div class="col-md-8 add-cat new-cat-left">
                    
                       <h3>Add New Listing</h3>
             <div class="form-group">
            <label>Name:</label>
            
              <input class="form-control" type="text" name="listing_name">
          </div>
         
           <div class="pic-cat">
           <label>Add Image/Video:</label>
             <input type="file"class="image_cat my-4"  name="listing_video">
        
          </div>
          <div class="course_status">
                 <h3>Status</h3>
                 <select name="listing_status" class="course_st">
                   <option value="1">Publish</option>
                   <option value="2">Draft</option>
                 </select>
               </div>
        
         
         
          </div>
          
                 <div class="form-group col-md-12 pl-0 mt-3 add-cat-btn ">
            
              <button type="submit" class="btn btn-primary text-white" value="Save Changes">Add</button>
              <span></span>
          
          </div>
                </div>
          </form>
                
                
                </div>  
</div>
</div>
</div>
@include('includes.footer');