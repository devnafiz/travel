  <nav class="navbar navbar-expand-xl sticky-top navbar-custom main-navbar p-1" id="mynavbar-1">
            <div class="container">
        
                <a href="#" class="navbar-brand py-1 m-0"><span></span><img src="{{asset('frontend/images/logo/logo.png')}}" width="100px" height="40px"></a>
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
                              <a href="#home-links1"  class="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  id="dropdownMenu2"><i class="fa fa-user"></i>&nbsp {{Auth::user()->name}}</a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width: 100px !important;padding: 2px !important;">
                                    <a class="items-list active" href="{{url('/dashboard')}}"><i class="fa fa-home"></i>&nbspDashboard</a>
                                   <hr class="hr hr-blurry" />
                                    <a class="items-list" href="#"><i class="fa fa-user-circle"></i>&nbspLogout</a>
                                    
                                   
                                </div><!-- end sub-menu -->


                            @else
                            <a href="{{route('login')}}"  ><i class="fa fa-sign"></i> Login</a>
                            @endif
                        </li>

                    </ul>
                        
                  
                    
                        <ul class="navbar-nav ml-auto menu3  w-100 justify-content-end px-3 " style="position: relative;
top: -11px;">
                       
                         
                         <li class="nav-item  active">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Hotel')  }} </a>                         
                    
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link" >Rooms</a>
                            
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link" >Restaurant & Bar</a>
                            
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link" >Tagungen & Events</a>
                            
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link" >About us</a>
                           
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link" >Career</a>                          
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link" >Faq</a>                          
                        </li>

                        <li class="nav-item ">
                            <a href="#" class="nav-link" >News</a>                          
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
                                    <a class="items-list active" href="#">Hotel</a>
                                    <a class="items-list" href="#">Room</a>
                                    <a class="items-list" href="#">Restaurant & bar</a>
                                    <a class="items-list" href="#">Tagungen & event</a>
                                    <a class="items-list" href="#">Gruppenanfrage</a>
                                    <a class="items-list" href="#">Geschäftskunden</a>
                                    <a class="items-list" href="#">Deals</a>
                                    <a class="items-list" href="#">Travel Agency Page</a>
                                </div><!-- end sub-menu -->
       
                                <a class="items-list" href="#flights-links" data-toggle="collapse"><span><i class="fa fa-plane link-icon"></i></span>Other<span><i class="fa fa-chevron-down arrow"></i></span></a>
                                <div class="collapse sub-menu" id="flights-links">
                                    <a class="items-list" href="#">Faq</a>
                                    <a class="items-list" href="#">Career</a>
                                    <a class="items-list" href="#">About Us</a>
                                   
                                </div>
        
                        
                    </div><!-- End list-group panel -->
                </div><!-- End main-menu -->
            </nav>
        </div><!-- End sidenav-content -->
        