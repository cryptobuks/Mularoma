@extends('layouts.main')

  @section('content')

<!-- container -->
			<div class="container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					
					<div class="d-flex my-xl-auto right-content">
						<div class="pe-1 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon me-2 btn-b"><i
									class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pe-1 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon me-2"><i
									class="mdi mdi-star"></i></button>
						</div>
						<div class="pe-1 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon me-2"><i
									class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">{{Auth::user()->created_at}}</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
									id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="ps-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user">
											@if(Auth::user()->img !=null)
											<img alt="" src="{{asset('img/profile/')}}/{{Auth::user()->img}}"><a
												class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>

											@else
											<img alt="" src="/assetss/img/faces/6.jpg"><a
												class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>

											@endif

										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">{{Auth::user()->username}}</h5>
												<p class="main-profile-name-text">Member</p>
											</div>
										</div>
										<h6>Bio</h6>
										<div class="main-profile-bio">
											{{Auth::user()->bio}} <a href="">More</a>
										</div><!-- main-profile-bio -->
										<div class="row">
											<div class="col-md-4 col mb20">
												<h5>0</h5>
												<h6 class="text-small text-muted mb-0">Followers</h6>
											</div>
											<div class="col-md-4 col mb20">
												<h5>0</h5>
												<h6 class="text-small text-muted mb-0">Tweets</h6>
											</div>
											<div class="col-md-4 col mb20">
												<h5>0</h5>
												<h6 class="text-small text-muted mb-0">Posts</h6>
											</div>
										</div>
										<hr class="mg-y-30">
										<label class="main-content-label tx-13 mg-b-20">Social</label>
										<div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="icon ion-logo-github"></i>
												</div>
												
											</div>
											<div class="media">
												<div class="media-icon bg-success-transparent text-success">
													<i class="icon ion-logo-twitter"></i>
												</div>
												<div class="media-body">
													<span>Twitter</span> <a href="">twitter.com/{{Auth::user()->tweeter}}</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-info-transparent text-info">
													<i class="icon ion-logo-facebook"></i>
												</div>
												<div class="media-body">
													<span>Facebook</span> <a href="">facebook.com/{{Auth::user()->fb}}</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-danger-transparent text-danger">
													<i class="icon ion-md-fb"></i>
												</div>
												<div class="media-body">
													<span>My Portfolio</span> <a href=""></a>
												</div>
											</div>
										</div>
										<hr class="mg-y-30">
										
										
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="row row-sm">
							<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-body">
										<div class="counter-status d-flex md-mb-0">
											<div class="counter-icon bg-primary-transparent">
												<i class="icon-layers text-primary"></i>
											</div>
											<div class="ms-auto">
												<h5 class="tx-13">Balance</h5>
												<h2 class="mb-0 tx-22 mb-1 mt-1">{{Auth::user()->currency}} {{Auth::user()->wallet}}</h2>
												<p class="text-muted mb-0 tx-11"><i
														class="si si-arrow-up-circle text-success me-1"></i>increase</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-body">
										<div class="counter-status d-flex md-mb-0">
											<div class="counter-icon bg-danger-transparent">
												<i class="icon-paypal text-danger"></i>
											</div>
											<div class="ms-auto">
												<h5 class="tx-13">Affiliates</h5>
												<h2 class="mb-0 tx-22 mb-1 mt-1">{{Auth::user()->currency}} {{Auth::user()->ref_bal}}</h2>
												<p class="text-muted mb-0 tx-11"><i
														class="si si-arrow-up-circle text-success me-1"></i>increase</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-body">
										<div class="counter-status d-flex md-mb-0">
											<div class="counter-icon bg-success-transparent">
												<i class="icon-rocket text-success"></i>
											</div>
											<div class="ms-auto">
												<h5 class="tx-13">Investments</h5>
												<h2 class="mb-0 tx-22 mb-1 mt-1">{{Auth::user()->currency}} {{Auth::user()->wallet}}</h2>
												<p class="text-muted mb-0 tx-11"><i
														class="si si-arrow-up-circle text-success me-1"></i>increase</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="tabs-menu ">
									<!-- Tabs -->
									<ul class="nav nav-tabs profile navtab-custom panel-tabs">
										<li class="">
											<a href="#home" data-bs-toggle="tab" class="active" aria-expanded="true"> <span
													class="visible-xs"><i
														class="las la-user-circle tx-16 me-1"></i></span> <span
													class="hidden-xs">ABOUT ME</span> </a>
										</li>
										<li class="">
											<a href="#profile" data-bs-toggle="tab" aria-expanded="false"> <span
													class="visible-xs"><i class="las la-images tx-15 me-1"></i></span>
												<span class="hidden-xs">GALLERY</span> </a>
										</li>
										<li class="">
											<a href="#settings" data-bs-toggle="tab" aria-expanded="false"> <span
													class="visible-xs"><i class="las la-cog tx-16 me-1"></i></span>
												<span class="hidden-xs">SETTINGS</span> </a>
										</li>
									</ul>
								</div>
								<div class="tab-content border-start border-bottom border-right border-top-0 p-4 br-dark">
									<div class="tab-pane active" id="home">
										<h4 class="tx-15 text-uppercase mb-3">BIOdata</h4>
										<p class="m-b-5">{{Auth::user()->bio}}</p>
										
									</div>
									<div class="tab-pane" id="profile">
									<!-- 	<div class="row">
											<div class="col-sm-4">
												<div class="border p-1 card thumb">
													<a href="#" class="image-popup" title="Screenshot-2"> <img
															src="../../assets/img/photos/7.jpg" class="thumb-img"
															alt="work-thumbnail"> </a>
													<h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
													<div class="ga-border"></div>
													<p class="text-muted text-center"><small>Photography</small></p>
												</div>
											</div>
											<div class="col-sm-4">
												<div class=" border p-1 card thumb">
													<a href="#" class="image-popup" title="Screenshot-2"> <img
															src="../../assets/img/photos/8.jpg" class="thumb-img"
															alt="work-thumbnail"> </a>
													<h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
													<div class="ga-border"></div>
													<p class="text-muted text-center"><small>Photography</small></p>
												</div>
											</div>
											<div class="col-sm-4">
												<div class=" border p-1 card thumb">
													<a href="#" class="image-popup" title="Screenshot-2"> <img
															src="../../assets/img/photos/9.jpg" class="thumb-img"
															alt="work-thumbnail"> </a>
													<h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
													<div class="ga-border"></div>
													<p class="text-muted text-center"><small>Photography</small></p>
												</div>
											</div>
											<div class="col-sm-4">
												<div class=" border p-1 card thumb  mb-xl-0">
													<a href="#" class="image-popup" title="Screenshot-2"> <img
															src="../../assets/img/photos/10.jpg" class="thumb-img"
															alt="work-thumbnail"> </a>
													<h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
													<div class="ga-border"></div>
													<p class="text-muted text-center"><small>Photography</small></p>
												</div>
											</div>
											<div class="col-sm-4">
												<div class=" border p-1 card thumb  mb-xl-0">
													<a href="#" class="image-popup" title="Screenshot-2"> <img
															src="../../assets/img/photos/6.jpg" class="thumb-img"
															alt="work-thumbnail"> </a>
													<h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
													<div class="ga-border"></div>
													<p class="text-muted text-center"><small>Photography</small></p>
												</div>
											</div>
											<div class="col-sm-4">
												<div class=" border p-1 card thumb  mb-xl-0">
													<a href="#" class="image-popup" title="Screenshot-2"> <img
															src="../../assets/img/photos/5.jpg" class="thumb-img"
															alt="work-thumbnail"> </a>
													<h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
													<div class="ga-border"></div>
													<p class="text-muted text-center"><small>Photography</small></p>
												</div>
											</div>
										</div> -->
									</div>
									<div class="tab-pane" id="settings">
										<form role="form" action="{{url('profile/update')}}" method="post" enctype="multipart/form-data">
											@csrf
											<div class="form-group">
												<label for="FullName">Full Name</label>
												<input type="text" id="FullName" class="form-control" value="{{Auth::user()->firstname}} {{Auth::user()->lastname}}" readonly>
											</div>
											<div class="form-group">
												<label for="Email">Email</label>
												<input type="email" value="{{Auth::user()->email}}" id="Email"
													class="form-control" readonly>
											</div>
											<div class="form-group">
												<label for="Username">Username</label>
												<input type="text" value="{{Auth::user()->username}}" id="Username" class="form-control" readonly>
											</div>

											<div class="form-group">
												<label for="Username">Profile</label>
												<input type="file" value="{{Auth::user()->img}}" name="user_photo" id="Username" class="form-control">
											</div>
											
											<div class="form-group">
												<label for="AboutMe">About Me</label>
												<textarea id="AboutMe"
													class="form-control" name="bio">{{Auth::user()->bio}}</textarea>
											</div>
											<button class="btn btn-primary waves-effect waves-light w-md"
												type="submit">Save</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->


  @endsection