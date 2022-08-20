@extends('frontend.master')


@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

@php
   $currentURL = Request::url();

  $banner=App\Models\Banner::where('cat','tour')->first();
  //dd($banner);
@endphp

<div class="main-breadcrumb-area section-padding"  style="background: url({{(isset($banner->image))?asset($banner->image):''}});height: 400px;background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="pagetitle" style="color: #fff">
							Tour Booking
						</h1>
						
					</div>
				</div>
			</div>
		</div>
		<!--Main Breadcrumb Area End -->		
<!-- Contact Us Area Start -->


<section class="section-padding">
	<div class="container">
		<div class="row">
            @foreach($tours as $k=>$val)   
			 <div class="col-md-4">
                       <img src="{{asset($val->mainimage)}}" width="100%">
                                               
                        <div class="detail-box">
                        	<h4>{{Str::limit(__($val->heading),50)}}</h4>
                            <p>
                               {{Str::limit(__($val->des),200)}}
                            </p>
                              <a href="{{route('place.tour',$val->id)}}" target="_blank">Booking now</a>
                          </div>
                                                
             </div>
             @endforeach
             <div class="pagination">
             	{{$tours->links()}}
             	
             </div>
		</div>
	</div>
			 	
</section>







@endsection