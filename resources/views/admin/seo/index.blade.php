@extends('admin.admin_master')


@section('admin')
<!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
                       <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-list fa-sm text-white-50"></i>  Dashboard</a>
                    </div>

                    <!-- Content Row -->
                   

     <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">SEo</h1>
                            </div>
							<form class="text-center" action="{{route('update.seo')}}" method="POST" enctype="multipart/form-data">
								@csrf

								
								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">meta Title</label>
											<input type="text" class="form-control" required id="inputGroupSelect00" name="meta_title" value="{{(isset($seo->meta_title))? $seo->meta_title : ''}}">
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->

								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Meta Author</label>
											<input type="text" class="form-control" required id="inputGroupSelect00" name="mata_author" value="{{(isset($seo->mata_author))? $seo->mata_author:''}}" >
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->

								<div class="form-row">
									<div class="col-md">
										<div class="form-group">
											
											<textarea cols="90%" rows="4" name="meta_description">
												{{(isset($seo->meta_description))? $seo->meta_description :'' }}
											</textarea>
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->
								
								
								
							        <div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">meta tag</label>
											<input type="text" class="form-control" required id="inputGroupSelect00" name="meta_tag" value="{{(isset($seo->meta_tag))? $seo->meta_tag : ''}}">
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->

								 <div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">Google Analytics</label>
											<input type="text" class="form-control"  id="inputGroupSelect00" name="google_analytics" value="{{(isset($seo->google_analytics))? $seo->google_analytics :''}}">
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->
								 <div class="form-row">
									<div class="col-md">
										<div class="form-group">
											<label for="inputGroupSelect00" class="">bing Analytics</label>
											<input type="text" class="form-control"  id="inputGroupSelect00" name="bing_analytics" value="{{(isset($seo->bing_analytics)) ? $seo->bing_analytics :'' }}">
										</div><!-- end form-group -->
									</div><!-- end column -->
									
								</div><!-- end form-row -->


								
                          <input type="hidden" name="id" value="{{(isset($seo->id))? $seo->id :'1' }}">

								

							
								<ul class="list-inline">
									<li class="list-inline-item">
										<button class="btn btn-success">Submit</button>
									</li>
									<li class="list-inline-item">
										<button class="btn btn-danger">Cancel</button>
									</li>
								</ul>
							</form>
						</div><!-- end cruise-listing-form -->
					</div><!-- end box -->
				
			</div>	
		</div>	
		</div>		



 @endsection
