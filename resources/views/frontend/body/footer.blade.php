


 
        
         <!--========================= NEWSLETTER-1 ==========================-->
       <section id="top-footer"  style="background: #ccc;padding: 30px;"> 
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10 col-md-offset-2">  
                        <div class="row">  

                            @php
                              $general= DB::table('genrals')->first();
                            @endphp
                            <div class="col-md-4 col-lg-4 footer-widget ftr-contact ">
                                <h4>{{(isset($general->title))? $general->title :''}}</h4>
                                
                            </div>
                            <div class="col-md-4 col-lg-4 footer-widget ftr-contact">
                                <h4>Parklee 3</h4>
                                <h5>45891 Gelsenkirchen</h5>
                                
                            </div>
                            <div class="col-md-4 col-lg-4  footer-widget ftr-contact">
                                  <h4>Phone: {{(isset($general->mobile))? $general->mobile :''}}</h4>
                                <h5>E-mail:{{(isset($general->email))? $general->email :''}}</h5>
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
                               
                                
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-4  footer-widget ftr-links">
                            <h3 class="navigationFooter__link">INVESTORS' AREA</h3>
                            <ul class="list-unstyled">
                             <li><a href="{{route('contact')}}">Contact</a></li>
                               
                                
                            </ul>
                        </div><!-- end columns -->
                        
                        <div class="col-12 col-md-6 col-lg-4  footer-widget ftr-links ftr-pad-left">
                            <h3 class="navigationFooter__link">Address</h3>
                            <ul class="list-unstyled">
                               <!--  <li><a href="#">Bonn</a></li> -->

                               
                            </ul>
                            <p>{{(isset($general->address))? $general->address:''}}</p>
                        </div><!-- end columns -->
        
                        
                      </div><!--end row--->

                    </div>
                        
                    </div><!-- end row -->


                </div><!-- end container -->
            </div><!-- end footer-top -->
        
            <div id="footer-bottom" class="ftr-bot-black">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="copyright">
                            <p>© 2022 <a href="#">Dream Travel</a>{{$Copyright}}</p>
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
        






 <!-- Page Scripts Starts -->

 <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script> 
  <!--   <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script> -->
    <script src="{{asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap-4.4.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/nav.js')}}"></script>
    <script src="{{asset('frontend/js/custom-flex.js')}}"></script>
    <script src="{{asset('frontend/js/custom-owl.js')}}"></script>
  
    <script src="{{asset('frontend/js/popup-ad.js')}}"></script>
  
    <script src="{{ url('backend/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
   <script src="{{ url('backend/js/custom-form-datepicker.js') }}"></script> 
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  


    <script type="text/javascript">
        
        $(document).ready(function() {

    $("#changed_lng").change(function(){
      //alert('hu');
       var lang = $('#changed_lng option:selected').val();
         //alert(lang);
        $.ajax({
             type: 'GET',
             url: {{url('/changelang')}},
            data:  {lang: lang},

             success: function(data) {
             location.reload();
            }
        });
    });

    </script>
    <script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
    <!-- Page Scripts Ends -->