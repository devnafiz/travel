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
                        <div class="col-md-8">
                             <div class="card-body">
                            <form  action="" method="post">
                                <div class="form-group">
                                    <label>Change Status</label>
                                    <section class="form-control" name="status" required>
                                        <option value="">Select Option</option>
                                        <option value="0">Pending</option>
                                        <option value="1">Accept</option>

                                          <option value="2"> Cancel</option>
                                         


                                        
                                    </section>
                                    
                                </div>
                                
                            </form>
                        </div>
                            
                        </div>
                        


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
                                            <th>Order No</th>
                                            <th>Heading</th>
                                            <th>User Id(Name)</th>
                                            <th>Amount </th>
                                            <th>Start Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            

                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>

                                      
                                        <tr>
                                            <td>{{__($data_details->id)}}</td>
                                            <td>{{__($data_details->heading)}}</td>
                                            <td>{{$data_details->user_id}}</td>
                                            <td>{{$data_details->amount}}</td>
                                            <td>{{$data_details->start_date}}</td>
                                            
                                            <td>


                                         @if($data_details->status==0)
                                          <span class="badge badge-danger">pending</span>
                                          @elseif($data_details->status==1)

                                        <span class="badge badge-success">accept</span>

                                        @else
                                          <span class="badge badge-danger">Cancel</span>
                                       @endif
                                            </td>
                                            <td>
                                              
                                                <a href="{{route('news.edit',$data_details->id)}}"><i class="fas fa-edit"></i></a>
                                             
                                            </td>
                                            
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>


   @endsection