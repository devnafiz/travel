@extends('frontend.master')


@section('content')
@php
   $currentURL = Request::url();

  $banner=App\Models\Banner::where('cat','news')->first();
  //dd($banner);
@endphp

<div class="main-breadcrumb-area banner-padding-page"  style="background: url({{(isset($banner->image))?asset($banner->image):''}});height: 400px;background-size: cover;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="pagetitle" style="color: #fff">
             NEWS
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

			 <div class="col-lg-8  col-md-8">
              @foreach($news as $k=>$val)
			 	 <div class="card" style="background-color: #fff;">
                                    <div class="card-body">
                                       
                                        <div class="row">

                                            <div class="col-md-4">
                                                <img src="{{asset($val->image)}}" width="100%">
                                                <span class="place" >Dortmund</span>
                                            </div>
                                            <div class="col-md-8 col-lg-8">
                                                <div class="detail-box">
                                                	<h3><a>{{__($val->heading)}}</a></h3>
                                                    <p>
                                                    {{Str::limit(__($val->des),200)}}
                                                    </p>
                                                    <a href="{{route('news.details',$val->slug)}}"> More</a>
                                                </div>
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                     
                                 </div> 

                     @endforeach  

                     <div class="pagination">
                       {{$news->links()}}
                     </div>          
			 	
			 </div>


			 <div class="col-md-4 col-lg-4">

			 	<div class="detail-box ">
                   <h3 class="text-center"> News Category</h3>
                   
                </div> 
                <ul class="list-unstyled">
                      @foreach($cat as $k=>$c_val)
                       <li><a href="#">{{$c_val->title}}</a></li>

                       @endforeach
                   </ul>

                  <div class="detail-box " style="margin-top: 30px">
                   <h3 class="text-center"> Latest News</h3>
                   
                  </div>  
                   <ul class="list-unstyled">
                      @foreach($news as $k=>$val)
                       <li style="padding: 12px;"><a href="#">{{Str::limit(__($val->heading),30)}}</a></li>

                       @endforeach
                   </ul>

			 	
			 </div>
			
		</div>
		
	</div>
	

</section>

@endsection