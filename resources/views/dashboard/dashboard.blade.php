@include('includes.header');
<div class="content">
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class=" ">
                  
                  <div class="card-body ">
                              @if (session('success'))
                    <div class="alert alert-success">
                      {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                      <form style="width:100%" method="POST" class="form-horizontal" role="form" action="/update-profile" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      	<div class="row">
                          
                          <!-- edit form column -->
                          <div class="col-md-8 personal-info ">
                            <div class="card mt-0">
                              <div class="alert alert-info alert-dismissable">
                                <a class="panel-close close" data-dismiss="alert">×</a> 
                                <i class="fa fa-coffee"></i>
                                You can Update the settings any time..
                              </div>
                              <div class="pl-3 pr-3">
                                <h2 class="card-title mt-3">Edit Profile</h2>
                                <h5>Personal info</h5>
                              </div>
                              
                                <div class="form-group mb-3">
                                  <label class="col-lg-3 control-label">Username:</label>
                                  <div class="col-lg-8">
                                    <input class="form-control mt-2" type="text" value="{{$users->name}}" name="name">
                                  </div>
                                </div>
                             
                                <div class="form-group mb-3">
                                  <label class="col-lg-3 control-label">Email:</label>
                                  <div class="col-lg-8">
                                    <input class="form-control mt-2 bg-white" type="text" value="{{$users->email}}" name="email" readonly>
                                  </div>
                                </div>
                              
                                <div class="form-group mb-3">
                                  <label class="col-lg-3 control-label">Phone:</label>
                                  <div class="col-lg-8">
                                    <input class="form-control mt-2" type="text" value="{{$users->phone}}" name="phone">
                                  </div>
                                </div>

                                <div class="form-group mb-3 set-textbox">
                                  <label class="col-lg-3 control-label">About Me:</label>
                                  <div class="col-lg-8">
                                    <textarea class="form-control mt-2" name="bio">{{$users->bio}}</textarea>
                                  </div>
                                </div>
                               
                                <div class="form-group mb-3 ">
                                  <label class="col-md-3 control-label"></label>
                                  <div class="col-md-8 profile-right-btn">
                                    <button type="submit" class="btn btn-primary" value="Save Changes">Save Changes</button>
                                    <span></span>
                                    <input type="reset" class="btn btn-default" value="Cancel">
                                  </div>
                                </div>

                              </div>
                            </div>
                          <div class="col-md-4 profile-pic ">
                            <div class="card mt-0">
                                <div class="card-header card-header-success card-header-icon">
                                  <div class="card-icon">
                                    <i class="material-icons"></i>
                                  </div>
                                </div>
                                <div class="text-center">
                                  <?php if($users->profile == '') {?>
                                <img src="//placehold.it/100" class="avatar img-circle rounded-circle" alt="avatar">
                                <?php } else { ?>
                                 <img src="{{ URL::asset('public/assets/admin/media/'.$users->profile) }}" class="avatar img-circle rounded-circle" alt="avatar">
                                <?php } ?>
                                <div class="up-border ml-3 mr-3 mb-4 position-relative mt-5">
                                  <input type="file" class="form-control main-input position-absolute" name="profile">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text bg-info text-white" id="basic-addon1">Upload</span>
                                    </div>
                                    <input type="text" class="form-control pl-3" placeholder="Choose File" aria-label="choose-file" aria-describedby="basic-addon1">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
          </div>
        </div>
      </div>
@include('includes.footer');

