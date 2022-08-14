<!doctype html>
<html lang="en">
<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    
    <!-- Google Fonts -->	
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    
    <!-- Bootstrap Stylesheet -->	
            <link rel="stylesheet" href="css/bootstrap-4.4.1.min.css">
    

    <!-- Sidebar Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
    
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
        
    <!-- Custom Stylesheets -->	
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/purple.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">
    
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/custom.css">
</head>


<body id="main-homepage">

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>
            
            
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
        

         <nav class="navbar navbar-expand-xl sticky-top navbar-custom main-navbar p-1" id="mynavbar-1">
            <div class="container">
        
                <a href="#" class="navbar-brand py-1 m-0"><span></span><img src="images/logo/stays hotel group LOGO.png" width="100px" height="40px"></a>
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
                                                    <select class="form-control" style="width: 52px;font-size: 13px;
background: #b9bfb38f;color: #000;">
                                                        <option value="EN" selected>EN</option>
                                                        <option value="GR">GR</option>
                                                        
                                                    </select>
                                                </div><!-- end form-group -->
                         </li> 

                         <li class="nav-item">
                             

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
                             
                         </li>
                        <li >
                            <a href="#" class="nav-link" > Faq</a>
                            
                        </li>
                        <li >
                            <a href="#" class="nav-link" > Career</a>
                            
                        </li>
                         <li >
                            <a href="#" class="" > About us</a>
                            
                        </li>

                    </ul>
                        
                  
                    
                        <ul class="navbar-nav ml-auto menu3  w-100 justify-content-end px-3 " style="position: relative;
top: -11px;">
                       
                         
                         <li class="nav-item  active">
                            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hotel</a>                         
                    
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
                            <a href="#" class="nav-link" >Gruppenanfrage</a>
                           
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link" >Geschaftskunden</a>                          
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link" >Deals</a>                          
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
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Stays-hotel</h2>
        
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
        
        
                <!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-1" style="height: 773px;
margin-top: -29px;
top: -80px;
position: relative;">
        
            <div class="flexslider slider" id="slider-1">
                <ul class="slides">
                    
                    <li class="item-1" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/slider/home1.png) 50% 0%;background-size:cover;
                        height:100%;">
                        <div class=" meta">         
                            <div class="container">
                                <h2>Discover</h2>
                                <h1>Stays Hotel</h1>
                                <a href="#" class="btn btn-default">View More</a>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->
                    
                    <li class="item-2" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/slider/slider_two.jpg) 50% 0%;background-size:cover;
                        height:100%;">
                        <div class=" meta">         
                            <div class="container">
                                <h2>Discover</h2>
                                <h1>Stays Hotel</h1>
                                <a href="#" class="btn btn-default">View More</a>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-2 -->
                   
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
                            <li class="active"><a href="#home-v" data-toggle="tab" style="width:300px">Stay by friends Gelsenkirchen</a></li>
                            <li><a href="#profile-v" data-toggle="tab" style="width:300px">Stay by friends Bochum </a></li>

                             <li><a href="#profile-v1" data-toggle="tab" style="width:300px">Parkhotel Bochum by stays</a></li>
                            <li><a href="#profile-v2" data-toggle="tab" style="width:300px">stays design hotel Dortmund</a></li>
                            
                           
                          </ul>



                         
                     </div>
                     <div class="col-md-6 col-lg-7 col-sm-6" style="background:#cccccc52;">

                        <!--tab content-->

                             <!-- Tab panes -->
                              <div class="tab-content">
                                <div class="tab-pane active" id="home-v">
                                    <div class="row">
                                        <div class="col-md-12">
                                          
                                             <img src="images/other/web.png" width="100%">
                                        </div><!-- slider end=-->

                                        
                                       
                                        
                                    </div>

                                    

                                          
                                     
                                </div>
                                <div class="tab-pane" id="profile-v">

                                        <div class="row">
                                        <div class="col-md-12">
                                          
                                             <img src="images/other/Gelsenkirchen.png" width="100%">
                                        </div><!-- slider end=-->

                                        
                                       
                                        
                                    </div>
                                </div>
                                 <div class="tab-pane" id="profile-v1">
                                     
                                      <div class="row">
                                        <div class="col-md-12">
                                          
                                             <img src="images/other/web.png" width="90%">
                                        </div><!-- slider end=-->

                                        
                                       
                                        
                                    </div>
                                 </div>
                                <div class="tab-pane" id="profile-v2">
                                    
                                     <div class="row">
                                        <div class="col-md-12">
                                         
                                        <img src="images/other/web.png" width="90%">
                                        </div><!-- slider end=-->

                                        
                                       
                                        
                                    </div>
                                </div>
                               <!--  <div class="tab-pane" id="profile-v3">Profile Tab23.</div>
                                <div class="tab-pane" id="profile-v4">Profile Tab4.</div> -->
                                
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
                   <div class="container">
                     <div class="row justify-content-md-center">
                             <div class="col-md-10 col-md-offset-2">
                                 <div class="card" style="background-color: #cccccc3d;">
                                    <div class="card-body">
                                        <h4 class="text-center">Pupolar Destinations for Travelers</h4>
                                        <div class="row">

                                            <div class="col-md-4">
                                                <img src="images/other/dortmounted.jpg" width="100%">
                                                <span class="place" >Dortmund</span>
                                                <div class="detail-box">
                                                    <p>
                                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
                                                    </p>
                                                    <a href="">Discover More</a>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                 <img src="images/other/bochum.jpg" width="100%">
                                                  <span class="place" >Bochum</span>
                                                 <div class="detail-box">
                                                    <p>
                                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
                                                    </p>
                                                    <a href="">Discover More</a>
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                   <img src="images/other/gelsch.jpg" width="100%">
                                                    <span class="place" >Gelsenkirchen</span>
                                                 <div class="detail-box">
                                                    <p>
                                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
                                                    </p>
                                                    <a href="">Discover More</a>
                                                    
                                                </div>
                                                
                                            </div>
                                            
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
                   <div class="container">
                     <div class="row justify-content-md-center">
                             <div class="col-md-10 col-md-offset-2">
                                 <div class="card" style="background-color: #cccccc3d;">
                                    <div class="card-body">
                                        <h4 class="text-center">Special offer</h4>
                                        <div class="row">

                                            <div class="col-md-6">
                                                
                                               
                                                <div class="detail-box" style="background: url('images/other/dortmounted.jpg') center; height: 200px;margin: 10px;">
                                                    <h3></h3>
                                                    <p class="detail-in" >It is a long established fact that a reader will be distracted</p>
                                                   
                                                    <a href="" class="pull-right btn btn-outline-light">Book now</a>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                              
                                                 
                                                 <div class="detail-box" style="background: url('images/other/bochum.jpg') center; height: 200px;margin: 10px;">
                                                    <p class="detail-in" >It is a long established fact that a reader will be distracted</p>
                                                   
                                                    <a href="" class="pull-right btn btn-outline-light">Book now</a>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                            
                                        </div>


                                        <div class="row">

                                            <div class="col-md-6">
                                               
                                                <div class="detail-box" style="background: url('images/other/dortmounted.jpg') center; height: 200px;margin: 10px;">
                                                    <p class="detail-in" >It is a long established fact that a reader will be distracted</p>
                                                   
                                                    <a href="" class="pull-right btn btn-outline-light">Book now</a>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                 
                                                 
                                                 <div class="detail-box" style="background: url('images/other/bochum.jpg') center; height: 200px;margin: 10px;">
                                                    <p class="detail-in" >It is a long established fact that a reader will be distracted</p>
                                                   
                                                    <a href="" class="pull-right btn btn-outline-light "> Book now</a>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                            
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
                   <div class="container">
                     <div class="row justify-content-md-center">
                             <div class="col-md-10 col-md-offset-2">
                                 <div class="card" >
                                    <div class="card-body">
                                        <h4 class="text-center">Latest News</h4>
                                        <div class="row">

                                            <div class="col-md-4">
                                                <img src="images/other/dortmounted.jpg" width="100%">
                                               
                                                <div class="detail-box">
                                                    <p>
                                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
                                                    </p>
                                                    <a href="">Discover More</a>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                 <img src="images/other/bochum.jpg" width="100%">
                                                
                                                 <div class="detail-box">
                                                    <p>
                                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
                                                    </p>
                                                    <a href="">Discover More</a>
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                   <img src="images/other/gelsch.jpg" width="100%">
                                                 
                                                 <div class="detail-box">
                                                    <p>
                                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
                                                    </p>
                                                    <a href="">Discover More</a>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                     
                                 </div> 



                             </div>   
    
                     </div>
                       
                   </div>
              </section>

          <!--=======end hotel--=========-->



        
        
     
                               
       
                
        
      
        
         <!--========================= NEWSLETTER-1 ==========================-->
       <section id="top-footer"  style="background: #ccc;padding: 30px;"> 
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10 col-md-offset-2">  
                        <div class="row">  
                            <div class="col-md-4 col-lg-4 footer-widget ftr-contact ">
                                <h4>stays by friends Gelsenkirchen</h4>
                                
                            </div>
                            <div class="col-md-4 col-lg-4 footer-widget ftr-contact">
                                <h4>Parklee 3</h4>
                                <h5>45891 Gelsenkirchen</h5>
                                
                            </div>
                            <div class="col-md-4 col-lg-4  footer-widget ftr-contact">
                                  <h4>Phone: +491011001010 3</h4>
                                <h5>E-mail:example@stays.hotels.com</h5>
                            </div>
                        </div>
                      </div>
                    
                </div>
            </div>
        </section><!-- end newsletter-1 -->
        
        
        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
        
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-10 col-md-offset-2 ">
                            <div class="row">
                                
                        <div class="col-12 col-md-6 col-lg-4  footer-widget ftr-contact">
                            <h3 class=" navigationFooter__link">ABOUT US</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">An overview of the company</a></li>
                                <li><a href="#">Press</a></li>
                                
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-4  footer-widget ftr-links">
                            <h3 class="navigationFooter__link">INVESTORS' AREA</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Investor Relations</a></li>
                               
                                
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-4  footer-widget ftr-links ftr-pad-left">
                            <h3 class="navigationFooter__link">APARTMENTS</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Bonn</a></li>
                               
                            </ul>
                        </div><!-- end columns -->
        
                        
                      </div><!--end row--->

                        <div class="row">
                                
                        <div class="col-12 col-md-6 col-lg-4  footer-widget ftr-contact">
                            <h3 class=" navigationFooter__link">Others </h3>
                            <ul class="list-unstyled">
                                
                                <li><a href="#">Contact</a></li>
                                
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-4  footer-widget ftr-links">
                            <h3 class="navigationFooter__link">Legal </h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Legal information</a></li>
                                <li><a href="#">Contest Rules</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                               
                                
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-4  footer-widget ftr-links ftr-pad-left">
                            <h3 class="navigationFooter__link">Folgen Sie uns </h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Bonn</a></li>
                               
                            </ul>
                        </div><!-- end columns -->
        
                        
                      </div>

                         


                    </div>
                        
                    </div><!-- end row -->


                </div><!-- end container -->
            </div><!-- end footer-top -->
        
            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="copyright">
                            <p>© 2017 <a href="#">StarTravel</a>. All rights reserved.</p>
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="terms">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="#">Terms & Condition</a></li>
                                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-bottom -->
            
        </section><!-- end footer -->
        
        
       
    </div>
           <style>
        

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
    background: #cccccc91;;
width: 117px !important;
text-align: center;
padding: 14px;
margin-left: 82px;
}
.detail-box{
    background: #cccccc91;;
    padding: 11px;
    color: #000;

}
.detail-box a{
    border: 1px solid #b99fc9;
    color: #b99fc9;
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
   font-size: 11px !important;
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
                        
    <!-- Page Scripts Starts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-4.4.1.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    <script src="js/custom-date-picker.js"></script>
    <script src="js/custom-video.js"></script>
    <script src="js/popup-ad.js"></script>
    <!-- Page Scripts Ends -->
    
</body>
</html>