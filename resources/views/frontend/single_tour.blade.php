
@extends('frontend.master')

@section('extra-css')


<script src="{{asset('frontend/js/details.js')}}"></script>
<!-- <script src="{{asset('frontend/js/details-slider.js')}}"></script> -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



@endsection
@section('content')

<section class="section-padding" style="padding-top: 2px;">
    <div class="main-breadcrumb-area banner-padding-page"  style="background: url({{asset($place->mainimage)}});">
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
                            <img src="{{asset($image->image)}}" />
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
                    <div class="aside-right hotel-right">
                        <form  method="post" action="{{route('new.order')}}">
                            @csrf
                           
                            <input type="hidden" name="place_id" value="{{$place->id}}" id="place_id">
                             <input type="hidden" name="type" id="type" value="{{$place->type}}">
                        <div class="price-area">
                                                       @if($place->discount_price!=null)  <div class="discount">
                                                             @php
                                                 $amount=$place->sale_price;
                                                 $discount=$amount*$place->discount_price/100;

                                                 $total= $place->sale_price - $discount;

                                              @endphp
                                             
                                {{(float)$place->discount_price}}%
                               
                            </div>
                            @else
                                  
                            @endif
                                                       
                                                        <p class="price">
                            @if($place->discount_price!=null)                                
                            ${{$total}}
                                                        <small>$<del>{{$place->sale_price}}</del></small>
                             @else
                               ${{$place->sale_price}}
                             @endif                           
                                                        </p>
                        </div>
                            <div class="book-now">
                                <h4 class="title">
                                    Book A Reservation
                                </h4>
                                <div class="start-time1" >
                                    <span>
                                        Start Date :
                                    </span>
                                    <input type="date" class="start_date"   name="start_date" value="" />
                                </div>
                                
                                 <hr>
                                  <div class="start-time1" >
                                    <span>
                                        End Date :
                                    </span>
                                    <input type="date" class="end_date  default-date"   name="end_date" value=""  />
                                </div>
                                
                                <div class="extra-price-wrap d-flex justify-content-between is_mobile mt-3">
                                    <div  class="flex-grow-1"><label>
                                            <h4 class="total">Total:</h4>
                                        </label></div>
                                     
                                    <div class="total-room-price"><span>$</span>
                                    @if($place->discount_price!=null)  
                                     <span class="total_price1"> {{$total}} </span>
                                      <input type="hidden" name="amount" id="amount" value="{{$total}}">
                                     @else
                                     <span class="total_price1"> {{$place->sale_price}} </span>
                                     <input type="hidden" name="amount" id="amount" value="{{$place->sale_price}}">
                                     @endif
                                 </div>
                                </div>
                                @if(Auth::check())
                                <input type="submit"  class="btn btn-primary" value="Book Now" style="width: 100%">
                                @else
                                   <a  href="{{url('/login')}}" class="btn btn-primary" style="width: 100%">Book Now</a>
                                @endif
                            </div>

                        </form>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                                                 
                                                </div><!-- end columns -->
                                                
                                                <div class="col-md-12 col-lg-12 tab-text">
                                                    <h3>Description</h3>
                                                    <p>{{$place->long_des}}</p>
                                                    
                                                </div><!-- end columns -->

                                                 
                                             </div>

                                              <div class="col-md-6 col-lg-6 ">

                                                     <div class="col-md-12 col-lg-12 tab-img">
                                                   
                                                </div><!-- end columns -->
                                                
                                                <div class="col-md-12 col-lg-12 tab-text">
                                                    
                                                    <span class="aminitis">Feature <span><i class="fa fa-angle-down"></i></span></span>
                                                    <ul>
                                                        {!!$place->feature!!}

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


<script type="text/javascript">



 $(document).ready(function(){
    $('#Booking').on('submit',function(){

        var place_id =$('#place_id').val();
        var type =$('#type').val();
        var amount =$('#amount').val();
        var start_date =$('.start_date').val();
        var end_date =$('.end_date').val();
        //alert(end_date);
       
     
       $.ajax({

            url: "{{url('/new/order')}}",
            type:"POST",
            dataType:"json",
            data:{place_id:place_id,type:type,amount:amount,start_date:start_date,end_date:end_date,
           
        _token:"{{ csrf_token() }}"
            },

            success:function(response){



                   }







           });
        });

     });



  

     

   
</script>


@endsection
