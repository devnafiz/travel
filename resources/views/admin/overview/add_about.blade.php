@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('about.all')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-list fa-sm text-white-50"></i>  Overview List</a>
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
                                <h1 class="h4 text-gray-900 mb-4">Create Overview </h1>
                            </div>
                            <form class="user" method="POST"  action="{{route('about.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " placeholder="{{ __('Please enter title') }}" type="text" id="title" name="title">
                                    </div>
                                    
                                </div>
                                

                                 <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                       <textarea class="form-control" name="des" id="mytextarea">
                                         {{old('des')}}
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
                                     <input class="slider tgl tgl-skewed" type="checkbox" id="status" checked="checked">
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

                                                <input required  id="image" name="image" type="file"
                                                    class="form-control">
                                              
                                              </div>
                                              <small class="text-info"> <i class="text-dark feather icon-help-circle"></i>({{__("Choose Image for blog post")}})</small>

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