@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('page.all')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-list fa-sm text-white-50"></i>  Page List</a>
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
                                <h1 class="h4 text-gray-900 mb-4">Edit Page </h1>
                            </div>
                            <form class="user" method="POST"  action="{{route('page.update',$edit_data->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " placeholder="{{ __('Please enter Page name') }}" type="text" id="name" name="name" value="{{$edit_data->name}}">
                                    </div>
                                    
                                </div>
                                <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " placeholder="{{ __('Please enter Page name') }}" type="text" id="slug" name="slug" value="{{$edit_data->slug}}">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label class="control-label" for="first-name"> {{__('Description')}} <span class="required"></span>
              </label>
                                   <textarea cols="100%" id="mytextarea" name="des" rows="5" class="form-control">
                                         {{$edit_data->des}}
                                    </textarea>
                                         <small class="text-info"> <i class="text-dark feather icon-help-circle"></i>({{__('Please enter description')}})</small>
                                     </div>    
                                </div>
                              <div class="form-group row">
                                     <!-- <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control iconvalue" name="icon" value="{{ __('Choose icon') }}">
                                    <span class="input-group-append">
                                  <button type="button" class="btnicon btn btn-outline-secondary" role="iconpicker"></button>
                                     </span>
                                    </div>-->
                                    <div class="col-sm-6">
                                        <label class="control-label" for="first-name">
                                            {{__('Status')}}: <span class="required">*</span>
                                         </label>
                                         <br>
                                    <label class="switch">
                                     <input class="slider tgl tgl-skewed" type="checkbox" id="status" checked="checked">
                                    <span class="knob"></span>
                                    </label>
                                          <br>
                                 <input type="hidden" name="status" value="1" id="status3">
                                         <small class="text-info"> <i class="text-dark feather icon-help-circle"></i>({{__('Please Choose Status')}})</small>
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


    <script>
      


      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

   


   @endsection