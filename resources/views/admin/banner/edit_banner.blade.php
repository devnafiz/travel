@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('banner.all')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-list fa-sm text-white-50"></i>  Banner List</a>
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
                                <h1 class="h4 text-gray-900 mb-4">Edit Slide </h1>
                            </div>
                            <form class="user" method="POST"  action="{{route('banner.update',$edit_data->id)}}" enctype="multipart/form-data">
                                @csrf
                               

                                
                                  <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                      <label for="cat">Banner Category</label>
                                      <select class="form-control" name="cat">
                                        <option value="">Select category</option>
                                        <option value="hotel" {{($edit_data->cat=='hotel')?'selected':''}}>hotel</option>
                                        <option value="tour" {{($edit_data->cat=='tour')?'selected':''}}>Tour</option>
                                        <option value="page" {{($edit_data->cat=='page')?'selected':''}}>Pages</option>
                                        <option value="news" {{($edit_data->cat=='news')?'selected':''}}>News</option>
                                        <option value="contact" {{($edit_data->cat=='contact')?'selected':''}}>Contact</option>

                                        
                                      </select>
                                    </div>
                                    
                                </div>
                              
                              <div class="form-group row">
                                  
                                    <div class="col-sm-6">
                                        <label class="control-label" for="first-name">
                                            {{__('Status')}}: <span class="required">*</span>
                                         </label>
                                         <br>
                                    <label class="switch">
                                     <input class="slider tgl tgl-skewed" type="checkbox" id="status" {{$edit_data->status ==1 ? "checked" : ""}}>
                                    <span class="knob"></span>
                                    </label>
                                          <br>
                                 <input type="hidden" name="status" value="1" id="status3">
                                         <small class="text-info"> <i class="text-dark feather icon-help-circle"></i>({{__('Please Choose Status')}})</small>
                                        </div>
                                        <div class="col-sm-6">
                                             <label class="control-label" for="first-name"> {{__("Image")}} <span class="required">*</span>
                                          </label>
                                              <div class="input-group">

                                                <input   id="image" name="image" type="file"
                                                    class="form-control">
                                                <!-- <div class="input-group-append">
                                                    <span data-input="image"
                                                        class="bg-primary text-light midia-toggle input-group-text">{{ __("Browse") }}</span>
                                                </div> -->
                                              </div>
                                              <small class="text-info"> <i class="text-dark feather icon-help-circle"></i>({{__("Choose Image for blog post")}})</small>
                                                <img src=" {{url('/'.$edit_data->image)}}"
                  class="pro-img" width="50" height="50" />

                                        </div>
                                    </div>

                                <button class="btn btn-primary btn-user btn-block" type="submit">Save</button>
                                
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