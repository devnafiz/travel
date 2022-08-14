@extends('frontend.master')


@section('content')


<section class="section-padding">
	<div class="container">
		<div class="row">

			 <div class="col-lg-8  col-md-8">
            
			 	 <div class="card" style="background-color: #fff;">
                                    <div class="card-body">
                                       
                                        <div class="row">

                                            <div class="col-md-12">
                                                <img src="{{asset($news_details->image)}}" width="100%">
                                               <!--  <span class="place" >Dortmund</span> -->
                                            </div>
                                            <div class="col-md-12 col-lg-12">
                                                <div class="detail-box">
                                                	<h3><a>{{__($news_details->heading)}}</a></h3>
                                                    <p>
                                                    {{__($news_details->des)}}
                                                    </p>
                                                   
                                                </div>
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                     
                                 </div> 

                              
			 	
			 </div>


			 <div class="col-md-4 col-lg-4">
                <div class="detail-box ">
                   <h3 class="text-center"> New Category</h3>
                   
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