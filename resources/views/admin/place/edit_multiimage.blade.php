@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('place.all')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-list fa-sm text-white-50"></i>  place  List</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                   </div> 	

                   <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Multi Image for Place </h1>
                            </div>
                            <form class="user" method="POST"  action="{{route('admin.update.multi.image',$edit_data->id)}}" enctype="multipart/form-data">
                                @csrf
                              
                                
                              <div class="form-group row">
                                   
                                        <div class="col-sm-12">
                                             <label class="control-label" for="first-name"> {{__("Image")}} <span class="required">*</span>
                                          </label>
                                              <div class="input-group">

                                                <input   id="image" name="image[]" type="file" class="form-control">
                                                <!-- <div class="input-group-append">
                                                    <span data-input="image"
                                                        class="bg-primary text-light midia-toggle input-group-text">{{ __("Browse") }}</span>
                                                </div> -->
                                              </div>
                                              <small class="text-info"> <i class="text-dark feather icon-help-circle"></i>({{__("Choose Image for Place post")}})</small>
                                              <img src="{{asset($edit_data->image)}}" width="50" height="50">

                                        </div>
                                    </div>

                                <button class="btn btn-primary btn-user btn-block" type="submit">Update</button>
                                
                                <hr>
                               
                            </form>
                            <hr>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


   @endsection