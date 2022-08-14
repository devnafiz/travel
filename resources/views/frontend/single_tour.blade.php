
@extends('frontend.master')

@section('extra-css')


<script src="{{asset('frontend/js/details.js')}}"></script>
<script src="{{asset('frontend/js/details-slider.js')}}"></script>


@endsection
@section('content')

<section class="section-padding" style="padding-top: 2px;">
    <div class="main-breadcrumb-area section-padding"  style="background: url({{asset($place->mainimage)}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="pagetitle" style="color:#fff">
                            {{$place->p_name}}
                        </h1>
                       
                    </div>
                </div>
            </div>
        </div>
    
</section>






     <!-- Single Details Area Start -->
    <section class="single-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    
                    <div id="slider" class="owl-carousel product-slider">

                       @php
                        //dd($place->images)
                       @endphp
                       @foreach($place->images as $img)

                       @php
                        //dd($img->image)
                       @endphp
                        <div class="item">
                            <img src="{{asset($img->image)}}" width="100%" height="400" />
                        </div>
                        @endforeach
                        
                    </div>
                    <div id="thumb" class="owl-carousel product-thumb">
                         @foreach($place->images as $image)
                        <div class="item">
                            <img src="{{asset($img->image)}}" />
                        </div>
                         @endforeach
                        
                    </div>
               
                    <div class="overview-area">
                        <h4 class="title">
                         {{($place->type=='Tour')?'Tour' :'Hotel'}}   Overview :
                        </h4>
                        <p>
                         <p>{{__($place->des)}}</p>
                        </p>
                    </div>

                    

                 
                                   
                  
                </div>
                <div class="col-lg-4">
                    <div class="aside-right">
                        <div class="price-area">
                                                        <div class="discount">
                                10%
                            </div>
                                                        <p class="price">
                            $5.88
                                                        <small><del>$6.03</del></small>
                                                        </p>
                        </div>
                            <div class="book-now-area">
                                <h4 class="title">
                                    Book A Reservation
                                </h4>
                                <div class="start-time">
                                    <span>
                                        Start Date :
                                    </span>
                                    <input type="text" class="date-range date_check select-date" name="date" value="" />
                                </div>
                                
                                 <hr>
                                <div class="date_show d-none">
                                    <li>
                                        <span>Start date:</span>
                                        <span class="start_date_show"></span>
                                    </li>
                                    <li>
                                        <span>End date:</span>
                                        <span class="end_date_show"></span>
                                    </li>
                                </div>
                                <div class="extra-price-wrap d-flex justify-content-between is_mobile mt-3">
                                    <div  class="flex-grow-1"><label>
                                            <h4 class="total">Total:</h4>
                                        </label></div>

                                    <div class="total-room-price"><span>$</span> <span class="total_price"> 0.00 </span></div>
                                </div>
                                <button type="button"  class="book-btn book_button">Book Now</button>
                            </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>

<input type="hidden" value="23" id="tourId">
<input type="hidden" value="4" id="tourDoration">
<input type="hidden" value="6" id="tourMaxPeapule">
<input type="hidden" value="5.88" id="tourMainPrice">
<!-- Trending Tour Area Start -->
 

         <!--============= End Room ==============-->  


         <!-- =============== tab ===============-->

         <section id="tab" class="section-padding">
                  <div class="container">
                       <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">

                                <div class="detail-tabs">


                                <ul class="nav nav-tabs  tabs justify-content-center" >
                                   
                                    <li class="nav-item active"><a class="nav-link" href="#crs-features" data-toggle="tab">Rooms Details</a></li>
                                    
                                  
                                </ul>
                                
                                <div class="tab-content">
                        
                                    <div id="cruise-information" class="tab-pane in active">
                                        <div class="row">
                                             <div class="col-md-6 col-lg-6 ">

                                                     <div class="col-md-12 col-lg-12 tab-img">
                                                    <img src="images/room/room3.jpg" class="img-fluid" alt="flight-detail-img" />
                                                </div><!-- end columns -->
                                                
                                                <div class="col-md-12 col-lg-12 tab-text">
                                                    <h3>Cruise Information</h3>
                                                    <p>1.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, .</p>
                                                    <span class="aminitis">AMINITIS <span><i class="fa fa-angle-down"></i></span></span>
                                                    <ul>
                                                        <li>65” flat-screen TV </li>
                                                        <li>Individually controlled heat and air-conditioning</li>
                                                        <li>Hair dryer</li>
                                                        <li>Plush robes and slippers</li>
                                                        <li>Iron and ironing board</li>
                                                        <li>Tea-making facilities and Nespresso® coffeemaker</li>
                                                        <li>Minibar</li>
                                                        <li>Laptop-sized in-room safe</li>
                                                        <li>Crib upon request</li>

                                                    </ul>
                                                </div><!-- end columns -->

                                                 
                                             </div>

                                              <div class="col-md-6 col-lg-6 ">

                                                     <div class="col-md-12 col-lg-12 tab-img">
                                                    <img src="images/room/room4.jpg" class="img-fluid" alt="flight-detail-img" />
                                                </div><!-- end columns -->
                                                
                                                <div class="col-md-12 col-lg-12 tab-text">
                                                    <h3>Cruise Information</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut .</p>
                                                    <span class="aminitis">AMINITIS <span><i class="fa fa-angle-down"></i></span></span>
                                                    <ul>
                                                        <li>65” flat-screen TV </li>
                                                        <li>Individually controlled heat and air-conditioning</li>
                                                        <li>Hair dryer</li>
                                                        <li>Plush robes and slippers</li>
                                                        <li>Iron and ironing board</li>
                                                        <li>Tea-making facilities and Nespresso® coffeemaker</li>
                                                        <li>Minibar</li>
                                                        <li>Laptop-sized in-room safe</li>
                                                        <li>Crib upon request</li>

                                                    </ul>
                                                </div><!-- end columns -->

                                                 
                                             </div>

                                           

                                        </div><!-- end row -->

                                    </div><!-- end cruise-information -->
                                    
                                   


                                    
                                    
                                    
                                    
                                    
                                    
                                </div><!-- end tab-content -->
                            </div><!-- end detail-tabs -->

                                       

                                      
                                
                            </div>
                           
                       </div>
                      

                  </div> 
             
         </section>
         <!-- ============end  tab ================= -->

	<style type="text/css">
    
    </style>

<script type="text/javascript">
   
</script>
@endsection
