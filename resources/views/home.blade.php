<!--<div id="myCarousel" class="carousel slide" data-ride="carousel">-->
    <!-- Indicators -->
<!--    <ol class="carousel-indicators">-->
<!--      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
<!--      <li data-target="#myCarousel" data-slide-to="1"></li>-->
<!--    </ol>-->

    <!-- Wrapper for slides -->
<!--    <div class="carousel-inner" role="listbox">-->
<!--      <div class="item active">-->
<!--        <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image">-->
<!--        <div class="carousel-caption">-->
<!--          <h3>Sell $</h3>-->
<!--          <p>Money Money.</p>-->
<!--        </div>      -->
<!--      </div>-->

<!--      <div class="item">-->
<!--        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">-->
<!--        <div class="carousel-caption">-->
<!--          <h3>More Sell $</h3>-->
<!--          <p>Lorem ipsum...</p>-->
<!--        </div>      -->
<!--      </div>-->
<!--    </div>-->

    <!-- Left and right controls -->
<!--    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">-->
<!--      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
<!--      <span class="sr-only">Previous</span>-->
<!--    </a>-->
<!--    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">-->
<!--      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
<!--      <span class="sr-only">Next</span>-->
<!--    </a>-->
<!--</div>-->
 @include('includes.front.header');

<div class="container text-center cust">    
  <h3>All Listings</h3><br>
  <div class="row">
      <?php if(!empty($listings) && isset($listings)){ 
       foreach($listings as $listing){
       ?>
      <div class="col-sm-4 common randon-listing">
          <?php
           if($listing->media != ''){

             $supported_image = array('gif','jpg','jpeg','png');
                    $ext = strtolower(pathinfo($listing->media, PATHINFO_EXTENSION));
                
                      //echo $ext; 
                	// Using strtolower to overcome case sensitive
                
                	if (in_array($ext, $supported_image))
                     {
                    ?>
                      <a class="example-image-link" href="{{ URL::asset('public/assets/admin/media/'.$listing->media) }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image img-responsive" src="{{ URL::asset('public/assets/admin/media/'.$listing->media) }}" alt="{{$listing->name}}" style="width:100%"/></a>

                    <!--<img src="{{ URL::asset('public/assets/admin/media/'.$listing->media) }}" class="img-responsive" style="width:100%" alt="Image">-->
                    <?php
                	   }else{?>
                	   
            <button type="button" class="btn btn-info btn-lg video-btn" data-toggle="modal" data-target="#myModal">
           
                         <video width="320" height="240" controls="false">
              <source src="{{ URL::asset('public/assets/admin/media/'.$listing->media) }}" type="video/mp4">
             
            </video><i class="far fa-play-circle"></i>

                    </button>
                    <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                    <!-- Modal content-->

                    <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body video-full">
                           <video width="500" height="400" autoplay>
              <source src="{{ URL::asset('public/assets/admin/media/'.$listing->media) }}" type="video/mp4">
             
            </video>
               
                   
                   
                    </div>
                  
                    </div>

                    </div>
                    </div>
              
           
            <?php
            }
                	  
            }
            ?>
      
      <p class="listing-title">{{$listing->name}}</p>
    </div>
      <?php
      }
      } 
      ?>
        <a href="#" id="loadMore">Load More</a>

  </div>
</div>
@include('includes.front.footer');
</body>
</html>
