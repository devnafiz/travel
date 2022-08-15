

@extends('frontend.master')

@section('content')


<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </nav>
      </div>
    </div>
   <?php  $user= App\Models\User::where('id',Auth::id())->first();
     //dd( $user);


   ?>
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{__(Auth::user()->name)}}</h5>
           
            <p class="text-muted mb-4">{{Auth::user()->phone}}</p>
           
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
             @include('frontend.user.user_sidebar')
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{__(Auth::user()->name)}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{__(Auth::user()->email)}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{__(Auth::user()->phone)}}</p>
              </div>
            </div>
            <hr>
            
            
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
               
                <p class="mb-1" style="font-size: .77rem;">Booking Tour Plan</p>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Type</th>
                      <th>Amount</th>
                      <th>Booking Date</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                  
                </table>
                
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
