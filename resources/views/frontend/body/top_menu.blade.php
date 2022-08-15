  <nav class="navbar navbar-expand-xl sticky-top navbar-custom main-navbar p-1" id="mynavbar-1">
            <div class="container">
        
                <a href="{{url('/')}}" class="navbar-brand py-1 m-0"><span></span><img src="{{asset('frontend/images/logo/logo.png')}}" width="100px" height="40px"></a>
                <div class="header-search d-xl-none my-auto ml-auto py-1">
                    <a href="#" class="search-button" onClick="openSearch()"><span><i class="fa fa-search"></i></span></a>
                </div>
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="sidebarCollapse">
                    <i class="fa fa-navicon py-1"></i>
                </button>
        
                <div class="collapse navbar-collapse" id="myNavbar1">

                      <div class="container">
                        
                           
                   
                          <ul class="navbar-nav ml-auto navbar-search-link"  style=" margin-top: 23px;">
                       
                         
                        
                        <li class="dropdown-item search-btn" style="padding: 0px 0;">
                            <a href="#" class="search-button" onClick="openSearch()"><span><i class="fa fa-search"></i></span></a>
                        </li>


                         <li class="nav-item " style="padding: 0px 0;">
                             <div class="form-group language">
                                                   <!--  <span><i class="fa fa-angle-down"></i></span> -->
                    @php
                    $langauges = DB::table('locales')->where('status', '=', 1)->get();
                    @endphp                                <select class="form-control changed_language"  id="changed_lng" style="width: 52px;font-size: 13px;
background: #b9bfb38f;color: #000;">
   @foreach($langauges as $lang)
                                                        <option {{ Session::get('changed_language') == $lang->lang_code ? "selected" : ""}}
                      value="{{ $lang->lang_code }}">{{ ucfirst( $lang->lang_code) }}</option>
 @endforeach
                                                        
                                                        
                                                        
                                                    </select>
                                                </div><!-- end form-group -->
                         </li> 

                       <!--  <li class="nav-item">
                             

                             <a><i class="fa   fa-user-circle " style="margin-top: -7px;
font-size: 22px;
padding: 3px;
width: 25px;
height: 24px;
border: 1px solid #ccc;
background: #b9bdb8;"></i><span style="
  font-size: 12px;
  padding: 3px;;
display: block ruby;
top: -5px;
position: relative;">My Booking</span></a>
                             
                         </li>-->
                        <!--<li >
                            <a href="#" class="nav-link" > Faq</a>
                            
                        </li>
                        <li >
                            <a href="#" class="nav-link" > Career</a>
                            
                        </li>-->
                         <li >
                            @if(Auth::check())
                               <a href="{{route('dashboard')}}" class="nav-link" >Dashboard</a>
                              
                            @else
                            <a href="{{route('login')}}"  ><i class="fa fa-sign"></i> Login</a>
                            @endif
                        </li>

                    </ul>
                        
                  
                    
                        <ul class="navbar-nav ml-auto menu3  w-100 justify-content-end px-3 " style="position: relative;
top: -11px;">
                       
                         
                         <li class="nav-item  active">
                            <a href="{{URL::to('/')}}" class="nav-link">{{__('Home')  }} </a>                         
                    
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('hotel.booking')}}" class="nav-link" >Hotel</a>
                            
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('tour.booking')}}" class="nav-link" >Tour</a>
                            
                        </li>
                        @php
                          $pages= DB::table('pages')->where('status','1')->get();
                          //dd($page);
                        @endphp
                        <li class="nav-item ">
                            <a href="#" class="nav-link" href="#home-links1"  class="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  id="dropdownMenu3">Pages</a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu3" style="width: 130px !important;padding: 2px !important;">
                                @if($pages)
                                     @foreach($pages as $k=>$page)
                                 <a href="{{URL::to('/page/'.$page->slug)}}" class="nav-link drop-menu" >{{ __($page->name)}}</a>
                                     @endforeach

                                @endif
                               
                              </div>
                            
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link" >About us</a>
                           
                        </li>
                       
                        <li class="nav-item ">
                            <a href="#" class="nav-link" >Faq</a>                          
                        </li>

                        <li class="nav-item ">
                            <a href="{{route('news')}}" class="nav-link" >News</a>                          
                        </li> 

                    </ul>
                    

               
           </div>
                 
                    
                </div><!-- end navbar collapse -->


            </div>
            <!-- End container -->

            <br/>
                 
                    
                          
                        
                    
                    
                

        </nav>


        <div class="sidenav-content">
            <!-- Sidebar  -->
            <nav id="sidebar" class="sidenav">
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Dream Travel</h2>
        
                <div id="main-menu">
                    <div id="dismiss">
                        <button class="btn" id="closebtn">&times;</button>
                    </div>
                    <div class="list-group panel">
                                <a href="#home-links" class="items-list active" data-toggle="collapse" aria-expanded="false">
                                <span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu text-danger" id="home-links">
                                    <a class="items-list active" href="{{URL::to('/')}}">Home</a>
                                    <a class="items-list" href="{{route('hotel.booking')}}">Hotel</a>
                                    <a class="items-list" href="{{route('tour.booking')}}">Tour</a>
                                    <a class="items-list" href="#">Tagungen & event</a>
                                    <a class="items-list" href="#">Gruppenanfrage</a>
                                    
                                </div><!-- end sub-menu -->
       
                                <a class="items-list" href="#flights-links" data-toggle="collapse"><span><i class="fa fa-plane link-icon"></i></span>Other<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu" id="flights-links">
                                    <a class="items-list" href="#">Faq</a>
                                    <a class="items-list" href="{{route('news')}}">News</a>
                                    <a class="items-list" href="#">About Us</a>
                                   
                                </div>
        
                        
                    </div><!-- End list-group panel -->
                </div><!-- End main-menu -->
            </nav>
        </div><!-- End sidenav-content -->
        