@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('place.add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Create Place </a>
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
                            <h6 class="m-0 font-weight-bold text-primary">Place list</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Heading</th>
                                            <th>Description</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Image</th>
                                            <th>Heading</th>
                                            <th>Description</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach($all_place as $k=>$val)
                                        <tr>
                                             <td><img src="{{asset($val->mainimage)}}" width="50" height="50"></td>
                                            <td>{{$val->heading}}</td>
                                            <td>{{$val->des}}</td>
                                            <td>{{$val->type}}</td>
                                            <td>{{($val->status==1)? 'active' :'Deactive'}}</td>
                                            <td>
                                                <a href="{{route('place.details',$val->id)}}"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('place.multi_image',$val->id)}}"><i class="fas fa-plus" title="multi Image add"></i></a>
                                                <a href="{{route('place.edit',$val->id)}}"><i class="fas fa-edit"></i></a>
                                               <a href="{{route('place.delete',$val->id)}}" id="delete"><i class="fas fa-trash"></i></a>
                                            </td>
                                            
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination">
                                       {{$all_place->links()}}
                                    
                                </div>
                                    

                            </div>
                        </div>
                    </div>

                </div>


   @endsection