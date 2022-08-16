@extends('frontend.master')


@section('content')

<div class="main-breadcrumb-area banner-padding-page"  style="background: url(https://dev.geniusocean.net/booking-genius/assets/images/genarel-settings/1587788309bigbanner.jpg.png);">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="pagetitle">
              {{$page->name}}
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

			 <div class="col-lg-12  col-md-12">
             
			 	 <div class="card" style="background-color: #fff;">
                                    <div class="card-body">
                                       
                                        <div class="row">

                                           <!--  <div class="col-md-4">
                                               
                                                <span class="place" >Dortmund</span>
                                            </div> -->
                                            <div class="col-md-12 col-lg-12">

                                              {!!__($page->des)!!}
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                     
                                 </div> 

                    
			 	
			 </div>


			
			
		</div>
		
	</div>
	

</section>

@endsection