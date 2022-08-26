@extends('admin.admin_master')


@section('admin')

    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{route('slider.add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Create slider </a>
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
                            <h6 class="m-0 font-weight-bold text-primary">Slider list</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Heading</th>
                                            <th>TopHeading</th>
                                            <th>Button Name</th>
                                            <!-- <th>Button color</th> -->
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Image</th>
                                            <th>Heading</th>
                                            <th>TopHeading</th>
                                            <th>Button Name</th>
                                            <!-- <th>Button color</th> -->
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        @foreach($all_slider as $k=>$val)
                                        <tr>
                                             <td><img src="{{url('/'.$val->image)}}" width="50" height="50"></td>
                                            <td>{{$val->heading}}</td>
                                            <td>{{$val->topheading}}</td>
                                            <td>{{$val->buttonname}}</td>
                                             
                                            <td>{{($val->status==1)? 'active' :'Deactive'}}</td>
                                            <td><a href="{{route('slider.edit',$val->id)}}"><i class="fas fa-edit"></i></a>
                                               <a href="{{route('slider.delete',$val->id)}}" id="delete"><i class="fas fa-trash"></i></a>
                                            </td>
                                            
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination">
                                    {{$all_slider->links()}}
                                    
                                </div>
                                    
                            </div>
                        </div>
                    </div>

                </div>


   @endsection