@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('place.all')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-list fa-sm text-white-50"></i>  Place List</a>
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
                                <h1 class="h4 text-gray-900 mb-4">Create place </h1>
                            </div>
                            <form class="user" method="POST"  action="{{route('place.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " placeholder="{{ __('Please enter Heading') }}"  id="heading" name="heading">
                                    </div>
                                    
                                </div>
                                <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " placeholder="{{ __('Please enter Place name Or hotel name') }}"  id="heading" name="p_name">
                                    </div>
                                    
                                </div>
                                <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " placeholder="{{ __('Please enter Place Location') }}"  id="location" name="location">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label class="control-label" for="first-name"> {{__('Overview')}} <span class="required"></span>
              </label>
                                   <textarea cols="100%" id="editor1" name="des" rows="5" class="form-control">
                                         {{old('des')}}
                                    </textarea>
                                         <small class="text-info"> <i class="text-dark feather icon-help-circle"></i>({{__('Please enter Overview')}})</small>
                                     </div>    
                                </div>

                                <div class="form-group row">
                                     <div class="col-sm-6"> 
                                         <div class="form-group ">
                                          <div class="col-sm-12 mb-3 mb-sm-0">
                                              <input type="text" class="form-control " placeholder="{{ __('Please enter Price ') }}"  id="sale_price" name="sale_price">
                                          </div>
                                          
                                      </div>


                                     </div>

                                      <div class="col-sm-6"> 
                                       
                                          <div class="form-group ">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <input type="text" class="form-control " placeholder="{{ __('Please enter Discount Price') }}"  id="discount_price" name="  discount_price">
                                            </div>
                                            
                                        </div>

                                     </div>
                                  

                                </div>
                                 <div class="form-group row">
                                     <div class="col-sm-6"> 
                                         <div class="form-group ">
                                          <div class="col-sm-12 mb-3 mb-sm-0">
                                              <input type="text" class="form-control " placeholder="{{ __('Please enter Start date ') }}"  id="default-date" name="start_date">
                                          </div>
                                          
                                      </div>


                                     </div>

                                      <div class="col-sm-6"> 
                                       
                                          <div class="form-group ">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <input type="text" class="form-control default-date " placeholder="{{ __('Please enter End date') }}"  id="" name="end_date">
                                            </div>
                                            
                                        </div>

                                     </div>
                                  

                                </div>
                                 <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <select class="form-control" name="type">
                                          <option value="">---select option--</option>
                                          <option value="Hotel">Hotel</option>
                                          <option value="Tour">Tour</option>
                                        </select>
                                    </div>
                                    
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label class="control-label" for="first-name"> {{__('Long Description')}} <span class="required"></span>
              </label>
                                   <textarea cols="100%" id="editor1" name="long_des" rows="5" class="form-control">
                                         {{old('long_des')}}
                                    </textarea>
                                         <small class="text-info"> <i class="text-dark feather icon-help-circle"></i>({{__('Please enter Long description')}})</small>
                                     </div>    
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label class="control-label" for="first-name"> {{__('Feature')}} <span class="required"></span>
              </label>
                                   <textarea cols="100%" id="mytextarea" name="feature" rows="5" class="form-control">
                                         {{old('feature')}}
                                    </textarea>
                                         <small class="text-info"> <i class="text-dark feather icon-help-circle"></i>({{__('Please Add Feature')}})</small>
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
                                             <label class="control-label" for="first-name"> {{__("Main Image")}} <span class="required">*</span>
                                          </label>
                                              <div class="input-group">

                                                <input required  id="image" name="main_image" type="file"
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
        selector: '#mytextarea',
         plugins: [
          'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
          'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
          'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist checklist outdent indent | removeformat | a11ycheck code table '
      });
    </script>


   @endsection