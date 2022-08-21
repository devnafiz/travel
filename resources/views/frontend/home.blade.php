<!doctype html>
<html lang="en">
<head>
    <title>{{ env('APP_NAME') }} |</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{asset('frontend/images/logo/favicon.ico')}}" type="image/x-icon">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
    <!-- Google Fonts -->	
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    
    <!-- Bootstrap Stylesheet -->	
            <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-4.4.1.min.css')}}">
    

    
    
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
        
    <!-- Custom Stylesheets -->	
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" id="cpswitch" href="{{asset('frontend/css/extra.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}">
    
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}" type="text/css" />
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="{{asset('frontend/css/datepicker.css')}}">
    
    <!-- Magnific Gallery -->
   
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

     <style type="text/css">
        .dropdown-menu a{
            display: block !important;
            text-transform: capitalize !important;
            padding: 2px !important;
           
        }
        .dropdown-menu{
             min-width: 5rem !important;
        }
    </style>
</head>


<body id="main-homepage">

    <div class="wrapper">
        <!--====== LOADER =====-->
          @if(env("ENABLE_PRELOADER") == 1)
       <div class="loader"></div> 
            
            @endif
        <!--======== SEARCH-OVERLAY =========-->       
        <div id="myOverlay" class="overlay">
            <span class="closebtn" onClick="closeSearch()" title="Close Overlay">×</span>
            <div class="overlay-content">
                
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="float-left" type="text" placeholder="Search.." name="search">
                                <button class="float-left" type="submit"><i class="fa fa-search"></i></button>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->
        
        
        <!--============= TOP-BAR ===========-->
        

        @include('frontend.body.header')

        @include('frontend.body.slider')
        
       

        <!--============= Stay at  glance==============-->

        <section id="At_glance" class="section-padding">
            
            <div class="container">
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12">

                        <div class="title" style="padding: 57px;">
                            <h3 class="text-center">stays hotels Group</h3> 
                            <p>Attractive hotels in attractive locations! Most of our hotels are beside the stadium. Attractive hotels in attractive locations! Most of our hotels 
are beside the stadium. Attractive hotels in attractive locations! Most of our hotels are beside the stadium. Attractive hotels in attractive locations!
Attractive hotels in attractive locations! Most of our hotels are beside the stadium. Attractive hotels in attractive locations! Most of our hotels 
Attractive hotels in attractive locations! Most of our hotels are beside the stadium. Attractive hotels in attractive locations! Most of our hotels </p>

                        </div>
                     


                     </div>

                 </div>
                 


            </div>


        </section>


        <!--============= End Stay at  glance==============-->
       

         


          <!-- ===new location --=======================-->

             <section id="new-location" class="section-padding">
                     <div class="container">

                        <div class="row">

                         
                      <div class="col-md-6 col-lg-5 col-sm-6" style=" background: #cccccc3b;height: 89%;">

                        <ul class="nav nav-tabs tabs-left sideways pull-right">
                            @foreach($maps as $k=>$m_val)
                            <li class="{{($k==0)?'active': ''}}"><a href="#home-{{$k}}" data-toggle="tab" style="width:300px">{{__($m_val->name)}}</a></li>
                            @endforeach
                            
                            
                           
                          </ul>



                         
                     </div>
                     <div class="col-md-6 col-lg-7 col-sm-6" style="background:#cccccc52;">

                        <!--tab content-->

                             <!-- Tab panes -->
                              <div class="tab-content">
                                @foreach($maps as $k=>$m_val)
                                <div class="tab-pane {{($k==0)?'active': ''}}" id="home-{{$k}}">
                                    <div class="row">
                                        <div class="col-md-12">
                                         <iframe src="{{$m_val->link}}"  width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe> 
                                          
                                        </div><!-- slider end=-->

                                        
                                       
                                        
                                    </div>

                                    

                                          
                                     
                                </div>
                                @endforeach
                              
                                
                              </div>
                            </div>

                            <div class="clearfix"></div>
                                               <!-- Tab panes -->
                     


                                
                            </div>
                            
                        </div>
                         

                     </div>
                 

             </section>



          <!-- === new location --=======================-->


          <!--======= hotel--=========-->
            
              <section id="hotel" class="section-padding">
                   <div class="container-fluid">
                     <div class="row justify-content-md-center">
                             <div class="col-md-10 col-md-offset-2">
                                 <div class="card" style="background-color: #cccccc3d;">
                                    <div class="card-body">
                                        <h4 class="text-center">Pupolar Destinations for Travelers</h4>
                                        <div class="row">
                                          @foreach($p_des as $k=>$des)
                                            <div class="col-md-4">
                                                <img src="{{asset($des->image)}}" width="100%" height="250">
                                                <span class="place">{{$des->Pname}}</span>
                                                <div class="detail-box">
                                                    <p>
                                                    {{Str::limit($des->des,200)}}
                                                    </p>
                                                    @if($des->slug)
                                                    <a href="{{route('single.destination',$des->slug)}}">Discover More</a>
                                                    @else
                                                          <a href="#">Discover More</a>
                                                    @endif
                                                </div>
                                                
                                            </div>
                                            @endforeach
                                            
                                            
                                            
                                        </div>
                                        
                                    </div>
                                     
                                 </div> 



                             </div>   
    
                     </div>
                       
                   </div>
              </section>

          <!--=======end hotel--=========-->


            <!--=======Special offer--=========-->
            <section id="hotel" class="section-padding">
                   <div class="container-fluid">
                     <div class="row justify-content-md-center">
                             <div class="col-md-10 col-md-offset-2">
                                 <div class="card" style="background-color: #cccccc3d;">
                                    <div class="card-body">
                                        <h4 class="text-center">Special offer</h4>
                                        <div class="row">

                                          @foreach($place as $key=>$p_val)

                                            <div class="col-md-6">
                                                
                                               
                                                <div class="detail-box" style="background: url({{asset($p_val->mainimage)}}) center; height: 300px;margin: 10px;">
                                                    <h3></h3>
                                                    <p class="detail-in" >{{__(\Illuminate\Support\Str::limit($p_val->des,150))}}</p>
                                                   
                                                    <a href="{{route('place.tour',$p_val->id)}}" class="pull-right btn btn-outline-light">{{ __('Book now')  }}</a>
                                                </div>
                                                
                                            </div>

                                            @endforeach
                                            
                                            
                                            
                                        </div>


                                        
                                    </div>
                                     
                                 </div> 



                             </div>   
    
                     </div>
                       
                   </div>
              </section>


            <!--=======end Special offer--=========-->





        <!--======= hotel--=========-->
            
              <section id="hotel" class="section-padding">
                   <div class="container-fluid">
                     <div class="row justify-content-md-center">
                             <div class="col-md-10 col-md-offset-2">
                                 <div class="card" >
                                    <div class="card-body">
                                        <h4 class="text-center">Latest News</h4><br>
                                        <div class="row">
                                           @foreach($news as $val)
                                            <div class="col-md-4">
                                                <img src="{{asset($val->image)}}" width="100%">
                                               
                                                <div class="detail-box">
                                                    <p>
                                                   {{Str::limit(__($val->des),200)}}
                                                    </p>
                                                    <a href="{{route('news.details',$val->slug)}}" target="_blank">Discover More</a>
                                                </div>
                                                
                                            </div>
                                            @endforeach
                                            
                                           
                                            
                                        </div>
                                        
                                    </div>
                                     
                                 </div> 



                             </div>   
    
                     </div>
                       
                   </div>
              </section>

          <!--=======end hotel--=========-->



        
        
     
                               
       
                
        
      
        
     
        @include('frontend.body.footer')
        
       
        
       
    </div>
           <style>
        
 .responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}  
    /* TODO list */
ul.todo li {
  padding-left: 1.3em;
  list-style: none;
}

    ul.todo li::before {
  content: '\2610';
  color: #eec666;;
  width: 13px;
  height: 12px;
  display: block;
  background-size: 13px 12px;
position: absolute;
left: 52px;
}

.overlay-text {
  font-size:3.5vw;
  float:right;
  width:65%; /*important*/
  /*bottom:21vw;*/ /*important*/
  padding: 25px;
 background: #f7f7f7;
 right: 97px;
   margin: 33px;
}

.overlay-text2{
  font-size:3.5vw;
  float:left;
  width:65%; /*important*/
  /*bottom:21vw;*/ /*important*/
  padding: 25px;
 background: #000;
left: 74px;
   margin: 33px;
     z-index: 22;
}




.overlap{
   
   
    padding: 10px;
  
  
}

.hotel-btn{

    background: black;
    color: #fff;
    top: 75px;
    position: relative;
}

.navigationFooter__link{
    font-style: normal;
font-weight: 400;
font-family: Eurostile-Bla,sans-serif;
color: #9a9f9f;
font-size: 22px;
line-height: 24px;
text-decoration: none;
position: relative;
display: block;
text-transform: uppercase;
padding: 15px 0;
}
ul.list-unstyled  li a{

     padding: 0px 4px;
}


.title::before {
  display: block;
  width: 3000px;
  left: 55%;
}

.title::after, .title::before {
  content: "";
  display: block;
  background-color: #f2f3f3;
  width: 70%;
  position: absolute;
  top: 0;
  bottom: 8px;
  right: 0;
  z-index: -1;
}
.title::after, .title::before {
  width: 45%;
  bottom: 12px;
}

.place {
    background: #27262691;
    width: 138px !important;
    text-align: center;
    padding: 14px;
    margin-left: -226px;
    position: absolute;
    margin-top: 233px;
    color: #e8d9d9;
}
.detail-box{
    background: #cccccc91;;
    padding: 11px;
    color: #000;

}
.detail-box a{
    border: 1px solid #b99fc9;
    color: #7d20b6;
}
.detail-in{
    color: #fff;
background: #cccccc85;
padding: 27px;
font-size: 20px;
}
.btn-outline-light{
    background: #fff;
}

#new-location ul li a{
     background: #bfb9b6;
    border: none;
    border-radius: 0px;
    margin: 0px;
    color: #fff;
    margin: 2px;
}
.search-tabs .nav-tabs li a {
    background: #000;
    border-radius: 0px;
    color: white;
    line-height: 1.428571;
}
.search-tabs .nav-tabs li {
    border-left: 1px solid #fff;
}

.main-navbar .navbar-search-link > li:nth-child(2) a {
  height: 35px;
  width: 35px;
  text-align: center;
  padding: 5px 7px 6px 8px;
  margin-top: -5px;
  text-decoration: none;
}

ul.menu3  li a{
   font-size: 16px !important;
text-transform: uppercase; !important;
}
.main-navbar.navbar-custom .navbar-nav > li {
  padding: 0px 0 !important;

}


.main-navbar .navbar-search-link > li:nth-child(2) {
  margin-left: 8px;
  margin-top: 0px;
}

.main-navbar .navbar-search-link >li:nth-child(2) a{
   height: 30px;
width: 30px;
text-align: center;
padding: 5px 7px 6px 8px;
margin-top: -5px;
text-decoration: none;
}

ul.navbar-search-link li a{
    font-size: 12px !important;
}
.main-navbar .navbar-nav > li > a {
 
 
  display: ruby-base;
}
</style>     

           <script type="text/javascript">
               
               $(document).ready(function() {
                  
                  $('#myTab a').click(function (e) {
                    e.preventDefault()
                    $(this).tab('show')
                  })
                  
                })

           </script>        
                        
   
    
</body>
</html>