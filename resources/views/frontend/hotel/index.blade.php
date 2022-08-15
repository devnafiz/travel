@extends('frontend.master')


@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<div class="main-breadcrumb-area section-padding"  style="background: url(https://dev.geniusocean.net/booking-genius/assets/images/genarel-settings/1587788309bigbanner.jpg.png);">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="pagetitle" style="color: #fff">
							Hotel Booking
						</h1>
						<!-- <ul class="pages">
							<li>
							<a href="https://dev.geniusocean.net/booking-genius">
									Home
								</a>
							</li>
							<li class="active">
							<a href="https://dev.geniusocean.net/booking-genius/contact">
									Contact Us
								</a>
							</li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
		<!--Main Breadcrumb Area End -->		
<!-- Contact Us Area Start -->


<section class="section-padding">
	<div class="container">
		<div class="row">
            @foreach($hotels as $k=>$val)   
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
             	{{$hotels->links()}}
             	
             </div>
		</div>
	</div>
			 	
</section>







@endsection