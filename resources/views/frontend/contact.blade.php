
@extends('frontend.master')


@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

@php
   $currentURL = Request::url();

  $banner=App\Models\Banner::where('cat','contact')->first();
  //dd($banner);
@endphp

<div class="main-breadcrumb-area section-padding"  style="background: url({{(isset($banner->image))?asset($banner->image):''}});height: 400px;background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="pagetitle" style="color: #fff">
							Contact Us
						</h1>
						
					</div>
				</div>
			</div>
		</div>
		<!--Main Breadcrumb Area End -->		
<!-- Contact Us Area Start -->


	<section class="contact-us section-padding" >
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="header-area">
						<h4 class="">
																Need help ? Get In Touch
														</h4>
												<p class="text">Send us a message and we&#039;ll respond as soon as possible.</p>
											
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-lg-7">
					<div class="left-area">
						<div class="contact-form">
							<form action="{{route('contact.store')}}" id="contactform" method="POST">

								@csrf
                              <div id="form-both">
      <div class="alert alert-success validation" style="display: none;">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span>×</span></button>
            <p class="text-left"></p> 
      </div>
      <div class="alert alert-danger validation" style="display: none;">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span>×</span></button>
            <ul class="text-left">
            </ul>
      </div>
</div>      


								<ul>
									<li>
										<input type="text" class="input-field" required placeholder="Enter Name" name="name">
									</li>
									<li>
										<input type="email" class="input-field" required placeholder="Email Address" name="email">
									</li>
									<li>
										<input type="text" class="input-field" required placeholder="Email Phone" name="phone">
									</li>
									<li>
										<input type="text" class="input-field" required placeholder="Enter location" name="country">
									</li>
									
									<li>
										<textarea class="input-field textarea" name="message" required placeholder="Your Message"></textarea>
									</li>
								</ul>
								<ul class="captcha-area">
									<li>
										<div class="captcha">
					                    <span>{!! captcha_img() !!}</span>
					                    <button type="button" class="btn btn-danger" class="reload" id="reload">
					                        &#x21bb;
					                    </button>
					                </div>
									</li>
									<li>
										<input type="text" class="input-field" name="captcha" placeholder="Enter Code" id="captcha" required="">
									</li>
								</ul>
								<br/>
                                <button class="submit-btn mybtn1" type="submit">Send Message 
                                    <span class="spinner-grow spinner-grow-sm d-none" style="padding:10px" role="status"></span>
                                </button>
                                
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="right-area">
						<div class="contact-info">
							<div class="left ">
									<div class="icon">
											<img src="https://dev.geniusocean.net/booking-genius/assets/front/images/emal.png" alt="">
									</div>
							</div>
							<div class="content">
									<h4 class="">
										Email
									</h4>
                                    <a href="javascript:;">
										contact@gmail.com
									</a>
									
							</div>
						</div>
						<div class="contact-info">
							<div class="left ">
									<div class="icon">
											<img src="https://dev.geniusocean.net/booking-genius/assets/front/images/location.png" alt="">
									</div>
							</div>
							<div class="content">
									<h4 class="">
										Location 
									</h4>
                                    <a href="javascript:;">
										Dhaka,  Bangladesh
									</a>
									
							</div>
						</div>
						<div class="contact-info">
							<div class="left ">
									<div class="icon">
											<img src="https://dev.geniusocean.net/booking-genius/assets/front/images/call.png" alt="">
									</div>
							</div>
							<div class="content">
									<h4 class="">
										Phone
									</h4>
										<a href="javascript:;">
												190000005
										</a>
										
							</div>
						</div>
						<div class="social-links">
							<h4 class="">Find us here :</h4>
							<ul>
                                                                                        <li>
                                <a href="https://www.facebook.com/" class="facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li> 
                                                                                    <li>
                                <a href="https://twitter.com/" class="twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                                                                                    <li>
                                <a href="https://www.linkedin.com/" class="linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                                                                                    <li>
                                <a href="https://plus.google.com/" class="google-plus">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
														                                <li>
									<a href="https://dribbble.com/" class="google-plus">
										<i class="fab fa-dribbble"></i>
									</a>
								</li>
								                            </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	
		
		<script type="text/javascript">
    $("#reload").click(function () {
        $.ajax({
            type: "GET",
            url: "reload-captcha",
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
	</script>


@endsection
