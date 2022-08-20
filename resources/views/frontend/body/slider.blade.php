      
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
            
         
            
        </section>
