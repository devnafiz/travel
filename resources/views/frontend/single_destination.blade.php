
@extends('frontend.master')

@section('extra-css')



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



@endsection
@section('content')

<section class="section-padding" style="padding-top: 2px;">
    <div class="main-breadcrumb-area banner-padding-page"  style="background: url({{asset($destination->image)}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="pagetitle" style="color:#fff">
                            {{($destination->Pname)}}
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
                     

                     
                        <div class="item">
                            <img src="{{asset($destination->image)}}" width="100%" height="400" />
                        </div>
                       
                        
                    </div>
                    
               
                    <div class="overview-area">
                        <h4 class="title">
                         {{($destination->Pname)}}
                        </h4>
                        <p>
                         <p>{{__($destination->des)}}</p>
                        </p>
                    </div>

                    

                 
                                   
                  
                </div>
                <div class="col-lg-4">
                    <div class="detail-box">
                      <h3 class="text-center">Hotel </h3>
                     </div>
                     <br>
                    @foreach($hotels as $k=>$val)
                    <div class="row">
                        <div class="col-lg-4">
                          
                            <img src="{{asset($val->mainimage)}}" width="60" height="60">
                          
                            
                        </div>
                        <div class="col-lg-8">
                            <h4><a href="{{url('/place/details/'.$val->id.'/'.$val->slug)}}">{{__($val->heading)}}</a></h4>
                            
                        </div>
                    </div>


                    @endforeach     

                     <div class="detail-box">
                      <h3 class="text-center">More Popular Destination </h3>
                     </div>
                     <br>
                    @foreach($p_des as $k=>$val)
                    <div class="row">
                        <div class="col-lg-4">
                          
                            <img src="{{asset($val->image)}}" width="60" height="60">
                          
                            
                        </div>
                        <div class="col-lg-8">
                             <h4>{{__($val->Pname)}}</h4>
                            <p>{{__($val->title)}}</p>
                            
                        </div>
                    </div>

                    <br>
                    @endforeach                 
                </div>
            </div>
        </div>
    </section>


<!-- Trending Tour Area Start -->
 

         






@endsection
