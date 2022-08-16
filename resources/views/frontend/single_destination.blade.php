
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
                            Destination
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
                   
                </div>
            </div>
        </div>
    </section>


<!-- Trending Tour Area Start -->
 

         <!--============= End Room ==============-->  



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
