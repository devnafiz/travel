@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    

                    

                    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  
                 

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                             <div class="box-header with-border">
                              <h4 class="box-title">Admin Profile Edit</h4>
                              
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <div class="row">
                              <div class="col">
                         <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data" >
                          @csrf
                                  <div class="row">
                                  <div class="col-12">

                            <div class="row">
                              <div class="col-md-6">

                         <div class="form-group">
                          <h5>Admin User Name  <span class="text-danger">*</span></h5>
                          <div class="controls">
                         <input type="text" name="name" class="form-control" required="" value="{{ $editData->name }}"> </div>
                        </div>
                                
                              </div> <!-- end cold md 6 -->



                              <div class="col-md-6">

                          <div class="form-group">
                          <h5>Admin Email  <span class="text-danger">*</span></h5>
                          <div class="controls">
                         <input type="email" name="email" class="form-control" required="" value="{{ $editData->email }}"> </div>
                        </div>
                                
                              </div> <!-- end cold md 6 --> 
                              
                            </div>  <!-- end row   -->  
                       

                         <div class="row">

                              <div class="col-md-6">
                          <div class="form-group">
                          <h5>Profile Image <span class="text-danger">*</span></h5>
                          <div class="controls">
                       <input type="file" name="profile_photo_path" class="form-control" required="" id="image"> </div>
                        </div>
                              </div><!-- end cold md 6 --> 

                              <div class="col-md-6">
                        <img id="showImage" src="{{ (!empty($editData->profile_photo_path))? url('upload/admin_images/'.$editData->profile_photo_path):url('upload/no_image.jpg') }}" style="width: 100px; height: 100px;">       

                              </div><!-- end cold md 6 --> 




                            </div><!-- end row   -->  
                        
                         
                        
                                




                             <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">          
                                  </div>
                                </form>

                              </div>
                              <!-- /.col -->
                              </div>
                              <!-- /.row -->
                            </div>
                            <!-- /.box-body -->
                           
                    
                            
                        </div>
                    </div>

                </div>
                

   @endsection