

@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                      
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            @php
                                           $users =DB::table('users')->get()->count();
                                            $accept =DB::table('orders')->where('status','1')->get()->count();
                                             $pending =DB::table('orders')->where('status','0')->get()->count();
                                            @endphp
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                 All Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$users}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Accepted Order</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{(!empty($accept))? $accept: '0'}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cart fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Orders</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{(!($pending))? $pending :'0'}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Booking Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">View All</a>
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                @php
                                      $all_orders=DB::table('orders')
                                                    ->leftjoin('places','orders.tour_id','places.id')
                                                    ->where('orders.status',0)
                                                    ->orderBy('orders.id','desc')
                                                   ->take(5)->get();
                                              //dd($all_orders);     
                                     

                                @endphp
                                <div class="card-body">
                                    <div class="chart-area">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                     <th>Heading</th>
                                                     <th>Date</th>
                                                    <th>Amount</th>
                                                       
                                                     <th>status</th>


                                                </tr>
                                            </thead>
                                            <tbody>

                                        @foreach($all_orders as $k=>$val)
                                        <tr>
                                             <td>{{$k+1}}</td>
                                            <td>{{__($val->heading)}}</td>
                                            <td>{{ \Carbon\Carbon::parse($val->created_at)->diffForHumans() }}</td>
                                             <td>{{$val->amount}}</td>
                                          
                                           
                                            <td>


                                         @if($val->status==0)
                                          <span class="badge badge-danger">pending</span>
                                          @elseif($val->status==1)

                                        <span class="badge badge-success">accept</span>

                                        @else
                                          <span class="badge badge-danger">Cancel</span>
                                       @endif
                                            </td>
                                           
                                            
                                        </tr>
                                       @endforeach
                                                
                                            </tbody>
                                            
                                        </table>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                     
                    </div>

                   




@endsection























