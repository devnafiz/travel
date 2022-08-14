         <!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-1" style="height: 773px;
margin-top: -29px;
top: -80px;
position: relative;">
        
            <div class="flexslider slider" id="slider-1">
                <ul class="slides">
                    @foreach($sliders as $k=>$s_val)
                    
                    <li class="item-1" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url({{asset($s_val->image)}}) 50% 0%;background-size:cover;
                        height:100%;">
                        <div class=" meta">         
                            <div class="container">
                               
                                <h1>{{$s_val->topheading}}</h1>
                                <a href="{{($s_val->link_by)? $s_val->link_by :'#'}}" class="btn btn-default">{{$s_val->buttonname}}</a>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->
                    @endforeach
                    
                    
                   
                </ul>
            </div><!-- end slider -->
            
         
             <!--<div class="search-tabs" id="search-tabs-1"  style="bottom: 60px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        
                            <ul class="nav nav-tabs justify-content-center">
                                <li class="nav-item active"><a class="nav-link" href="#flights" data-toggle="tab"><span class="d-md-inline-flex d-none st-text">Hotel</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#hotels" data-toggle="tab"><span class="d-md-inline-flex d-none st-text">Room</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#tours" data-toggle="tab"><span class="d-md-inline-flex d-none st-text">Restaurant & bar</span></a></li>

                                <li class="nav-item"><a class="nav-link" href="#cruise" data-toggle="tab"><span class="d-md-inline-flex d-none st-text">Tagungen & event</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#cars" data-toggle="tab"><span class="d-md-inline-flex d-none st-text">Gruppenanfrage</span></a></li>

                                 <li class="nav-item"><a class="nav-link" href="#cars" data-toggle="tab"><span class="d-md-inline-flex d-none st-text">Geschäftskunden</span></a></li>
                                  <li class="nav-item"><a class="nav-link" href="#cars" data-toggle="tab"><span></span><span class="d-md-inline-flex d-none st-text">Deals</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>-->
            
        </section><!-- end flexslider-container -->
