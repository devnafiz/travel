@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('active.order')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Active order </a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-8">
                             <div class="card-body">
                            <div class="table-responsive">

                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                          
                                            <th>User</th>
                                            <th>Info</th>
                                           
                                            

                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>

                                      
                                        <tr>
                                          <td>User Id</td>
                                            <td>{{$data_details->user_id}}</td>
                                                 
                                        </tr>
                                        <tr>
                                          <td>User Name</td>
                                            <td>{{$data_details->name}}</td>
                                                 
                                        </tr>
                                        <tr>
                                          <td>User Email</td>
                                            <td>{{$data_details->email}}</td>
                                                 
                                        </tr>

                                        <tr>
                                          <td>User Phone</td>
                                            <td>{{$data_details->phone}}</td>
                                                 
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
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
                                              
                                                <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-edit"></i></a>
                                             
                                            </td>
                                            
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form  action="{{route('order.update',$data_details->id)}}" method="post">
        @csrf
                                <div class="form-group">
                                   
                                    <select class="form-control" name="status" required>
                                        <option value="">Select Option</option>
                                        <option value="0">Pending</option>
                                        <option value="1">Accept</option>

                                          <option value="2"> Cancel</option>
                                         


                                        
                                    </select>
                                    
                                </div>
                                
                            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


   @endsection