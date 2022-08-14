@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('news.category.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-list fa-sm text-white-50"></i>  News Category</a>
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
                                <h1 class="h4 text-gray-900 mb-4">Create News Category</h1>
                            </div>
                            <form class="user" method="POST"  action="{{route('news.category.update',$category->id)}}">
                                @csrf
                                <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " placeholder="{{ __('Please enter Category name') }}" type="text" id="first-name" name="title" value="{{$category->title}}">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label class="control-label" for="first-name"> {{__('Description')}} <span class="required"></span>
              </label>
                                   <textarea cols="100%" id="editor1" name="description" rows="5" class="form-control">
                                        {{$category->description}}
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
                                     <input class="slider tgl tgl-skewed" type="checkbox" id="status"  {{$category->status ==1 ? "checked" : ""}}>
                                    <span class="knob"></span>
                                    </label>
                                          <br>
                                 <input type="hidden" name="status" value="1" id="status3">
                                         <small class="text-info"> <i class="text-dark feather icon-help-circle"></i>({{__('Please Choose Status')}})</small>
                                        </div>
                                    </div>

                                <button class="btn btn-primary btn-user btn-block" type="submit">update</button>
                                
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