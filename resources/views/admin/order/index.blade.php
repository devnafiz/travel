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
                            <h6 class="m-0 font-weight-bold text-primary"> Order list</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Heading</th>
                                            <th>User Id(Name)</th>
                                            <th>Amount </th>
                                            <th>Start Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            

                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL</th>
                                            <th>Heading</th>
                                            <th>User Id(Name)</th>
                                            <th>Amount </th>
                                            <th>Start Date</th>
                                            
                                             <th>Status</th>

                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach($all_data as $k=>$val)
                                        <tr>
                                             <td>{{$k+1}}</td>
                                            <td>{{__($val->heading)}}</td>
                                            <td>{{$val->user_id}}</td>
                                             <td>{{$val->amount}}</td>
                                            <td>{{$val->start_date}}</td>
                                           
                                            <td>


                                         @if($val->status==0)
                                          <span class="badge badge-danger">pending</span>
                                          @elseif($val->status==1)

                                        <span class="badge badge-success">accept</span>

                                        @else
                                          <span class="badge badge-danger">Cancel</span>
                                       @endif
                                            </td>
                                            <td>
                                                <a href="{{route('order.details',$val->id)}}"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('news.edit',$val->id)}}"><i class="fas fa-edit"></i></a>
                                               <a href="{{route('news.delete',$val->id)}}" id="delete"><i class="fas fa-trash"></i></a>
                                            </td>
                                            
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>

                                <div class="pagination">
                                    {{$all_data->links()}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


   @endsection