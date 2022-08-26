@extends('admin.admin_master')


@section('admin')






    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('place.all')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> place list </a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                   </div> 	

                    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  
                 

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Place Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Heading</th>
                                            <th>OverView</th>
                                            <th>Price</th>
                                            <th>discount Price</th>
                                            <th>Description</th>
                                            <th>Feature</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                       
                                        <tr>
                                             <td><img src="{{asset($p_details[0]->mainimage) }}" width="50" height="50"></td>
                                            <td>{{$p_details[0]->heading}}</td>
                                            <td>{{$p_details[0]->des}}</td>
                                            <td>{{$p_details[0]->sale_price}}</td>
                                            <td>{{$p_details[0]->discount_price}}</td>
                                             <td>{{$p_details[0]->long_des}}</td>
                                            <td>{!!$p_details[0]->feature!!}</td>
                                            <td>{{$p_details[0]->type}}</td>
                                            <td>{{($p_details[0]->status==1)? 'active' :'Deactive'}}</td>
                                            <td>
                                              

                                                <a href="{{route('place.multi_image',$p_details[0]->id)}}"><i class="fas fa-plus" title="multi Image add"></i></a>
                                                <a href="{{route('place.edit',$p_details[0]->id)}}"><i class="fas fa-edit"></i></a>
                                               
                                            </td>
                                            
                                        </tr>
                                     
                                    </tbody>
                                </table>
                            </div>
                           <h3>All Image</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                           
                                            <th>action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                        @php
                                          //dd();
                                        @endphp

                                        @if($p_details[0]->image!=null)

                                        @foreach($p_details as $val)
                                        <tr>
                                             <td><img src="{{url('/'.$val->image)}}" width="50" height="50"></td>
                                           
                                           
                                            
                                            <td>
                                           
                                                <a href="{{route('place.multi_image',$val->id)}}"><i class="fas fa-plus" title="multi Image add"></i></a>
                                                <a href="{{route('admin.edit.multi.image',$val->m_id)}}"><i class="fas fa-edit"></i></a>
                                               <a href="{{route('admin.delete.multi.image',$val->m_id)}}"><i class="fas fa-trash"></i></a>
                                              
                                            </td>
                                            
                                        </tr>
                                       @endforeach

                                       @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                


   @endsection