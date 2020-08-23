@include('includes.header');
<div class="content">
       
          <div class="container-fluid">
            <div class="row new-course-form">
             
                  <form  method="POST" class="form-horizontal" role="form" action="/update-listing/{{$listing->id}}" enctype="multipart/form-data" id="new-form" style="width:100%">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="row common mx-0">  
                <div class="col-md-8 add-cat new-cat-left py-4">
                    <div class="add-cat-btn">
                        <a class="btn btn-success" href="/listings" style="
    background-color: #00bcd4;
    border-color: #00bcd4;
">Go back</a>  
                 <a class="btn pull-right" href="/new-listing">Add New</a>
                    </div>
                  
             <h3>Edit Listing</h3>
             <div class="form-group">
            <label>Name:</label>
            <input class="form-control" type="text" name="listing_name" value="{{$listing->name}}">
            <input type="hidden" class="listing_id" value="{{$listing->id}}">
          </div>
           <div class="form-group">
            <label>Slug:</label>
            
              <input class="form-control" type="text" name="listing_slug" value="{{$listing->slug}}" readonly>
          </div>
        
           <div class="pic-cat">
            <label>Add Videos & Images:</label>
             <input type="file" class="image_cat"  name="listing_video">
            <?php
              if($listing->media != ''){

             $supported_image = array('gif','jpg','jpeg','png');
                    $ext = strtolower(pathinfo($listing->media, PATHINFO_EXTENSION));
                
                      //echo $ext; 
                	// Using strtolower to overcome case sensitive
                
                	if (in_array($ext, $supported_image))
                     {
                    ?>
                    <div class="vid-item">
                    <img src="{{ URL::asset('public/assets/admin/media/'.$listing->media) }}">
                    </div>
                    <?php
                	   }else{?>
            
                <div class="vid-item">
            
              <video width="320" height="240" controls>
              <source src="{{ URL::asset('public/assets/admin/media/'.$listing->media) }}" type="video/mp4">
             
            </video>
            </div>
            <?php
                	   }
                	  
            } ?>
           
        
          </div>
         <div class="listing_status">
                 <h3>Status</h3>
                 <select name="listing_status" class="course_st">
                   <option value="1" <?php if($listing->status == '1' || $listing->status == '' ){echo "selected";}?>>Publish</option>
                   <option value="2" <?php if($listing->status == '2'){echo "selected";}?>>Draft</option>
                  
                 </select>
               </div>
          </div>
          </div>
        
                 <div class="form-group add-cat-btn">
            
              <button type="submit" class="btn btn-primary text-white" value="Save Changes">Update</button>
              <span></span>
          
          </div>
                </div>
          </form>
                
                
                </div>  
</div>
</div>
</div>
@include('includes.footer');