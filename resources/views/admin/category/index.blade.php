@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('news.category.add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Create News Category</a>
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
                            <h6 class="m-0 font-weight-bold text-primary">News Category</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach($category as $k=>$val)
                                        <tr>
                                            <td>{{$val->title}}</td>
                                            <td>{{$val->position}}</td>
                                            <td>{{$val->description}}</td>
                                            <td>{{($val->status==1)? 'active' :'Deactive'}}</td>
                                            <td><a href="{{route('news.category.edit',$val->id)}}"><i class="fas fa-edit"></i></a>
                                               <a href="{{route('news.category.delete',$val->id)}}"><i class="fas fa-trash"></i></a>
                                            </td>
                                            
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>


   @endsection