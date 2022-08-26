@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('about.add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Create overview </a>
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
                            <h6 class="m-0 font-weight-bold text-primary">overview list</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>des</th>
                                          
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                       @if(isset($about_us))
                                        <tr>
                                             <td><img src="{{url('/'.($about_us->image) ? $about_us->image :'' )}}" width="50" height="50"></td>
                                            <td>{{$about_us->title}}</td>
                                            <td>{!!$about_us->des!!}</td>
                                           
                                             
                                            <td>{{($about_us->status==1)? 'active' :'Deactive'}}</td>
                                            <td><a href="{{route('about.edit',$about_us->id)}}"><i class="fas fa-edit"></i></a>
                                               <a href="{{route('about.delete',$about_us->id)}}" id="delete"><i class="fas fa-trash"></i></a>
                                            </td>
                                            
                                        </tr>
                                        @endif
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>


   @endsection