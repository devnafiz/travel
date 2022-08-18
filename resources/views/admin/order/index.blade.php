@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Active order </a>
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
                            <h6 class="m-0 font-weight-bold text-primary">Pending Order list</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Heading</th>
                                            <th>Amount </th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Action</th>
                                            <th>Status</th>

                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Heading</th>
                                            <th>Amount </th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                             <th>Status</th>

                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach($all_data as $k=>$val)
                                        <tr>
                                             <td>{{$k+1}}</td>
                                            <td>{{__($val->heading)}}</td>
                                            <td>{{$val->amount}}</td>
                                            <td>{{$val->start_date}}</td>
                                            <td>{{$val->end_date}}</td>
                                            <td><span class="badge">{{($val->status==1)? 'active' :'pending'}}</span></td>
                                            <td><a href="{{route('news.edit',$val->id)}}"><i class="fas fa-edit"></i></a>
                                               <a href="{{route('news.delete',$val->id)}}"><i class="fas fa-trash"></i></a>
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