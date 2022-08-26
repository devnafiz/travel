@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    

                    <!-- Content Row -->
                    <div class="row">

                   </div> 	

                    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  
                 

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
     <div class="widget-user-header bg-black" >
      <h3 class="widget-user-username">Admin Name: {{ $adminData->name }} </h3>

      <a href="{{ route('admin.profile.edit') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Edit Profile</a>

     <h6 class="widget-user-desc">Admin Email: {{ $adminData->email }} </h6>
                    </div>
                    <div class="widget-user-image">


  <img class="rounded-circle" src="{{ (!empty($adminData->profile_photo_path))? url('backend/admin_image/'.$adminData->profile_photo_path):url('upload/no_image.jpg') }}" alt="User Avatar">


                    </div>
                    
                            
                        </div>
                    </div>

                </div>


   @endsection