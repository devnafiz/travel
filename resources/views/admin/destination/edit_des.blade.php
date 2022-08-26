@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('des.all')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-list fa-sm text-white-50"></i>  Popular Destination List</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                   </div> 	

                   <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Destination </h1>
                            </div>
                            <form class="user" method="POST"  action="{{route('des.update',$edit_data->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control "  type="text" id="title" name="title" value="{{$edit_data->title}}">
                                    </div>
                                    
                                </div>
                                 <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control "  type="text" id="Pname" name="Pname" value="{{$edit_data->Pname}}">
                                    </div>
                                    
                                </div>
                                @if(empty($edit_data->slug))
                                <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control "  type="text" id="slug" name="slug"  placeholder="Enter slug">
                                    </div>
                                    <small class="text-info"> <i class="text-dark feather icon-help-circle"></i>({{__("Slug create '")}})</small>
                                    
                                </div>
                                @endif

                                 <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                         <textarea class="form-control" name="des">
                                      {{$edit_data->des}}
                                      </textarea>
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