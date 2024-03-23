<?php
	require_once '../ajax/brand/auth/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/university/horizontal/main/professors.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 14:45:17 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://crm-admin-dashboard-template.multipurposethemes.com/images/favicon.ico">

    <title>My Account | Social Connect </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="../../src/css/vendors_css.css">
	  
	<!-- Style-->    
	<link rel="stylesheet" href="../../src/css/horizontal-menu.css"> 
	<link rel="stylesheet" href="../../src/css/style.css">
	<link rel="stylesheet" href="../../src/css/skin_color.css">	

</head>
<body class="layout-top-nav light-skin theme-primary fixed">
	
<div class="wrapper">
	<div id="loader"></div>

    <?php include('header.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">My Account</h4>
					<!-- <div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Professors</li>
							</ol>
						</nav>
					</div> -->
				</div>				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row clearfix">
				<div class="col-lg-4 col-md-12">
					<div class="box profile-header">
						<div class="box-body text-center">
							<div class="profile-image mb-30"> <img src="../../images/avatar/1.jpg" class="box-shadowed rounded-circle" alt=""> </div>
							<div>
								<h3 class="mb-0" id="brand_name">Brand Name</h3>
								<span class="job_post" id="contact_name">Contact Name</span>
								<!-- <p class="mt-15">795 Folsom Ave, Suite 600<br> San Francisco, CADGE 94107</p> -->
							</div>
							<!-- <div>
								<button class="btn btn-primary btn-rounded">Follow</button>
								<button class="btn btn-primary-light btn-rounded">Message</button>
							</div> -->
						</div>                    
					</div>                               
					<!-- <div class="box">
						<div class="box-body">
							<div class="workingtime">
								<h5 class="fw-500">Working Time</h5>
								<small class="text-muted">Monday to Friday</small>
								<p>09:00 AM - 4:00 PM</p>
								<hr>
								<small class="text-muted">Saturday</small>
								<p>09:00 AM - 12:30 PM</p>
								<hr>
							</div>
							<div class="reviews">
								<h5 class="fw-500">Reviews</h5>
								<small class="text-muted">Staff</small>
								<p class="fs-16">
									<i class="mdi mdi-star text-warning"></i>
									<i class="mdi mdi-star text-warning"></i>
									<i class="mdi mdi-star text-warning"></i>
									<i class="mdi mdi-star-outline"></i>
									<i class="mdi mdi-star-outline"></i>
								</p>                            
								<hr>
								<small class="text-muted">Helpfulness</small>
								<p class="fs-16">
									<i class="mdi mdi-star text-warning"></i>
									<i class="mdi mdi-star text-warning"></i>
									<i class="mdi mdi-star text-warning"></i>
									<i class="mdi mdi-star text-warning"></i>
									<i class="mdi mdi-star text-warning"></i>
								</p>
								<hr>
								<small class="text-muted">Knowledge</small>
								<p class="fs-16">
									<i class="mdi mdi-star text-warning"></i>
									<i class="mdi mdi-star text-warning"></i>
									<i class="mdi mdi-star text-warning"></i>
									<i class="mdi mdi-star-outline"></i>
									<i class="mdi mdi-star-outline"></i>
								</p>
								<hr>
								<small class="text-muted">Cost</small>
								<p class="fs-16">
									<i class="mdi mdi-star text-warning"></i>
									<i class="mdi mdi-star text-warning"></i>
									<i class="mdi mdi-star-outline"></i>
									<i class="mdi mdi-star-outline"></i>
									<i class="mdi mdi-star-outline"></i>
								</p>
								<hr>
							</div>
						</div>
					</div>            -->
				</div>
				<div class="col-lg-8 col-md-12">
					<div class="box box-body">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a class="nav-link show" data-bs-toggle="tab" href="#about">About</a></li>
							<li class="nav-item"><a class="nav-link show" data-bs-toggle="tab" href="#Account">Help &amp; Support</a></li>                        
						</ul>
						<div class="tab-content">
							<div class="tab-pane py-30 active show" id="about">
								<ul class="list-unstyled">
									<li><p><strong>Brand Name: </strong> <span id="brand_name2"> b Name 2</span></p></li>
									<li><p><strong>Contact Name: </strong> <span id="contact_name2"> C_name</span> </p></li>
									<li><p><strong>Official Email: </strong><span id="off_email"> Off email</span></p></li>
									<li><p><strong>Whatsapp Number: </strong><span id="wt_num"> wt num</span> </p></li>
									<li><p><strong>Website: </strong><span id="web">web</span> </p></li>
									<li><p><strong>Instagram url: </strong><span id="insta_url">insta</span> </p></li>

								</ul>
								<!-- <hr> -->
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum interdum diam non mi cursus venenatis. Morbi lacinia libero et elementum vulputate. Vivamus et facilisis mauris. Maecenas nec massa auctor, ultricies massa eu, tristique erat. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui</p>
								<p>lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat. lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat.</p>                                                         -->
							</div>
							<div class="tab-pane py-30 show" id="Account">
								<div class="row clearfix">
									<div class="col-lg-6 col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email">
										</div>
									</div>
									<div class="col-lg-6 col-md-12">
										<div class="form-group">
											<input type="number" class="form-control" placeholder="WhatsApp Number">
										</div>
									</div>                                    
									<div class="col-md-12">
										<div class="form-group mb-10">
											<textarea rows="4" class="form-control no-resize" placeholder="Message"></textarea>
										</div>
									</div>
									
									<div class="col-md-12">
										<button class="mt-30 btn btn-primary btn-round">Submit</button>
									</div>
								</div>
							</div>                        
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="box box-body">
								<ul class="nav nav-tabs">
									<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Followers">Followers</a></li>
									<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#friends">Friends</a></li>                        
								</ul>
								<div class="tab-content">
									<div class="tab-pane pt-30 active" id="Followers">
										<div class="d-flex align-items-center mb-30">
											<div class="me-15">
												<img src="../../images/avatar/avatar-1.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
											</div>
											<div class="d-flex flex-column flex-grow-1 fw-500">
												<a href="#" class="text-dark hover-primary mb-1 fs-16">Sophia</a>
												<span class="text-fade">PHP, SQLite, Artisan CLI</span>
											</div>
											<div class="dropdown">
												<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item flexbox" href="#">
													<span>Inbox</span>
													<span class="badge badge-pill badge-info">5</span>
												  </a>
												  <a class="dropdown-item" href="#">Sent</a>
												  <a class="dropdown-item" href="#">Spam</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item flexbox" href="#">
													<span>Draft</span>
													<span class="badge badge-pill badge-default">1</span>
												  </a>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center mb-30">
											<div class="me-15">
												<img src="../../images/avatar/avatar-10.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
											</div>
											<div class="d-flex flex-column flex-grow-1 fw-500">
												<a href="#" class="text-dark hover-danger mb-1 fs-16">Mason</a>
												<span class="text-fade">PHP, SQLite, Artisan CLI</span>
											</div>
											<div class="dropdown">
												<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item flexbox" href="#">
													<span>Inbox</span>
													<span class="badge badge-pill badge-info">5</span>
												  </a>
												  <a class="dropdown-item" href="#">Sent</a>
												  <a class="dropdown-item" href="#">Spam</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item flexbox" href="#">
													<span>Draft</span>
													<span class="badge badge-pill badge-default">1</span>
												  </a>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center mb-30">
											<div class="me-15">
												<img src="../../images/avatar/avatar-11.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
											</div>
											<div class="d-flex flex-column flex-grow-1 fw-500">
												<a href="#" class="text-dark hover-success mb-1 fs-16">Emily</a>
												<span class="text-fade">PHP, SQLite, Artisan CLI</span>
											</div>
											<div class="dropdown">
												<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item flexbox" href="#">
													<span>Inbox</span>
													<span class="badge badge-pill badge-info">5</span>
												  </a>
												  <a class="dropdown-item" href="#">Sent</a>
												  <a class="dropdown-item" href="#">Spam</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item flexbox" href="#">
													<span>Draft</span>
													<span class="badge badge-pill badge-default">1</span>
												  </a>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center mb-30">
											<div class="me-15">
												<img src="../../images/avatar/avatar-12.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
											</div>
											<div class="d-flex flex-column flex-grow-1 fw-500">
												<a href="#" class="text-dark hover-info mb-1 fs-16">Daniel</a>
												<span class="text-fade">PHP, SQLite, Artisan CLI</span>
											</div>
											<div class="dropdown">
												<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item flexbox" href="#">
													<span>Inbox</span>
													<span class="badge badge-pill badge-info">5</span>
												  </a>
												  <a class="dropdown-item" href="#">Sent</a>
												  <a class="dropdown-item" href="#">Spam</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item flexbox" href="#">
													<span>Draft</span>
													<span class="badge badge-pill badge-default">1</span>
												  </a>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center">
											<div class="me-15">
												<img src="../../images/avatar/avatar-15.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
											</div>
											<div class="d-flex flex-column flex-grow-1 fw-500">
												<a href="#" class="text-dark hover-warning mb-1 fs-16">Natalie</a>
												<span class="text-fade">PHP, SQLite, Artisan CLI</span>
											</div>
											<div class="dropdown">
												<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
												  <a class="dropdown-item flexbox" href="#">
													<span>Inbox</span>
													<span class="badge badge-pill badge-info">5</span>
												  </a>
												  <a class="dropdown-item" href="#">Sent</a>
												  <a class="dropdown-item" href="#">Spam</a>
												  <div class="dropdown-divider"></div>
												  <a class="dropdown-item flexbox" href="#">
													<span>Draft</span>
													<span class="badge badge-pill badge-default">1</span>
												  </a>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane pt-30" id="friends">
										<ul class="new_friend_list list-unstyled row">
											<li class="col-lg-4 col-md-2 col-sm-6 col-4">
												<a href="#" class="text-center d-block mb-15">
													<img src="../../images/avatar/1.jpg" class="img-thumbnail" alt="User Image">
													<h5 class="mt-5 mb-0">Jackson</h5>
													<small class="join_date">Today</small>
												</a>
											</li>
											<li class="col-lg-4 col-md-2 col-sm-6 col-4">
												<a href="#" class="text-center d-block mb-15">
													<img src="../../images/avatar/2.jpg" class="img-thumbnail" alt="User Image">
													<h5 class="mt-5 mb-0">Aubrey</h5>
													<small class="join_date">Yesterday</small>
												</a>
											</li>
											<li class="col-lg-4 col-md-2 col-sm-6 col-4">
												<a href="#" class="text-center d-block mb-15">
													<img src="../../images/avatar/3.jpg" class="img-thumbnail" alt="User Image">
													<h5 class="mt-5 mb-0">Oliver</h5>
													<small class="join_date">08 Nov</small>
												</a>
											</li>
											<li class="col-lg-4 col-md-2 col-sm-6 col-4">
												<a href="#" class="text-center d-block mb-15">
													<img src="../../images/avatar/4.jpg" class="img-thumbnail" alt="User Image">
													<h5 class="mt-5 mb-0">Isabella</h5>
													<small class="join_date">12 Dec</small>
												</a>
											</li>
											<li class="col-lg-4 col-md-2 col-sm-6 col-4">
												<a href="#" class="text-center d-block mb-15">
													<img src="../../images/avatar/1.jpg" class="img-thumbnail" alt="User Image">
													<h5 class="mt-5 mb-0">Jacob</h5>
													<small class="join_date">12 Dec</small>
												</a>
											</li>
											<li class="col-lg-4 col-md-2 col-sm-6 col-4">
												<a href="#" class="text-center d-block mb-15">
													<img src="../../images/avatar/5.jpg" class="img-thumbnail" alt="User Image">
													<h5 class="mt-5 mb-0">Matthew</h5>
													<small class="join_date">17 Dec</small>
												</a>
											</li>                            
										</ul>
									</div>                        
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="box">
								<div class="box-header">
									<h4 class="box-title"><strong>Recent</strong> Activity</h4>
								</div>
								<div class="box-body p-0">
								  <div class="media-list media-list-hover">
									<a class="media media-single" href="#">
									  <span class="avatar avatar-lg bg-primary-light rounded"><i class="fa fa-user"></i></span>
									  <div class="media-body fw-500">
										<p class="fs-16">Pellentesque rhoncus ipsum vel mauris sagittis, vulputate semper arcu consectetur.</p>
										<span class="text-fade">55 min ago</span>
									  </div>
									</a>

									<a class="media media-single" href="#">
									  <span class="avatar avatar-lg bg-success-light rounded"><i class="fa fa-usd"></i></span>
									  <div class="media-body fw-500">
										<p class="fs-16">Pellentesque blandit odio id felis semper, imperdiet sagittis purus tincidunt.</p>
										<span class="text-fade">23 hours ago</span>
									  </div>
									</a>

									<a class="media media-single" href="#">
									  <span class="avatar avatar-lg bg-warning-light rounded"><i class="fa fa-star"></i></span>
									  <div class="media-body fw-500">
										<p class="fs-16">Aenean tincidunt tortor sit amet erat rutrum, vel condimentum ipsum gravida.</p>
										<span class="text-fade">Yesterday</span>
									  </div>
									</a>

									<a class="media media-single" href="#">
									  <span class="avatar avatar-lg bg-info-light rounded"><i class="fa fa-user"></i></span>
									  <div class="media-body fw-500">
										<p class="fs-16">Vivamus condimentum erat non turpis placerat, at volutpat metus commodo.</p>
										<span class="text-fade">55 min ago</span>
									  </div>
									</a>

								  </div>
								</div>
							</div>  
						</div>
					</div>                               -->
				</div>
			</div>
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
 
   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Side panel --> 
  <!-- quick_actions_toggle -->
  <div class="modal modal-right fade" id="quick_actions_toggle" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content slim-scroll">
		  <div class="modal-body bg-white p-30">
			<div class="d-flex align-items-center justify-content-between pb-30">
				<h4 class="m-0">Quick Actions<br>
				<small class="badge fs-12 badge-primary mt-10">23 tasks pending</small></h4>
				<a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
					<span class="fa fa-close"></span>
				</a>
			</div>
            <div class="row">
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="accounting.html">
                        <i class="icon-Euro fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Accounting</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="contact_userlist_grid.html">
                        <i class="icon-Mail-attachment fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Members</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="projects.html">
                        <i class="icon-Box2 fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Projects</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="contact_userlist.html">
                        <i class="icon-Group fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Customers</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="mailbox.html">
                        <i class="icon-Chart-bar fs-36"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        <span class="fs-16">Email</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="setting.html">
                        <i class="icon-Color-profile fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Settings</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="ecommerce_orders.html">
                        <i class="icon-Euro fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-18">Orders</span>
                    </a>
                </div>
			</div>
		  </div>
		</div>
	  </div>
  </div>
  <!-- /quick_actions_toggle -->    
    
  <!-- quick_panel_toggle -->
  <div class="modal modal-right fade" id="quick_panel_toggle" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content slim-scroll2">
		  <div class="modal-body bg-white py-20 px-0">
			<div class="d-flex align-items-center justify-content-between pb-30">
				<ul class="nav nav-tabs customtab3 px-30" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#quick_panel_logs">Audit Logs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#quick_panel_notifications">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#quick_panel_settings">Settings</a>
					</li>
				</ul>
                <div class="offcanvas-close">
                    <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
						<span class="fa fa-close"></span>
					</a>
                </div>
			</div>
              <div class="px-30">
                <div class="tab-content">
                    <div class="tab-pane active" id="quick_panel_logs" role="tabpanel">
                        <div class="mb-30">
                            <h5 class="fw-500 mb-15">System Messages</h5>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="https://crm-admin-dashboard-template.multipurposethemes.com/images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-primary mb-1 fs-16">Duis faucibus lorem</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="https://crm-admin-dashboard-template.multipurposethemes.com/images/svg-icon/color-svg/002-google.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-danger mb-1 fs-16">Mauris varius augue</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="https://crm-admin-dashboard-template.multipurposethemes.com/images/svg-icon/color-svg/003-settings.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-success mb-1 fs-16">Aliquam in magna</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="https://crm-admin-dashboard-template.multipurposethemes.com/images/svg-icon/color-svg/004-dad.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-info mb-1 fs-16">Phasellus venenatis nisi</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="https://crm-admin-dashboard-template.multipurposethemes.com/images/svg-icon/color-svg/005-paint-palette.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-warning mb-1 fs-16">Vivamus consectetur</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                        </div>
                        <div class="mb-30">
                            <h5 class="fw-500 mb-15">Tasks Overview</h5>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                      <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-primary mb-1 fs-16">Project Briefing</a>
                                    <span class="text-fade">Project Manager</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-danger mb-1 fs-16">Concept Design</a>
                                    <span class="text-fade">Art Director</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-success mb-1 fs-16">Functional Logics</a>
                                    <span class="text-fade">Lead Developer</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-info mb-1 fs-16">Development</a>
                                    <span class="text-fade">DevOps</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="me-15 bg-warning-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Shield-user fs-24"></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-warning mb-1 fs-16">Testing</a>
                                    <span class="text-fade">QA Managers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="quick_panel_notifications" role="tabpanel">
                        <div>
                            <div class="media-list">
                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">10:10</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-primary">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Johne</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">08:40</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-success">
                                    <p>Proin iaculis eros non odio ornare efficitur.</p>
                                    <span class="text-fade">by Amla</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">07:10</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-info">
                                    <p>In mattis mi ut posuere consectetur.</p>
                                    <span class="text-fade">by Josef</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">01:15</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-danger">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Rima</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">23:12</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-warning">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Alaxa</span>
                                  </div>
                                </a>
                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">10:10</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-primary">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Johne</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">08:40</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-success">
                                    <p>Proin iaculis eros non odio ornare efficitur.</p>
                                    <span class="text-fade">by Amla</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">07:10</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-info">
                                    <p>In mattis mi ut posuere consectetur.</p>
                                    <span class="text-fade">by Josef</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">01:15</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-danger">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Rima</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">23:12</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-warning">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Alaxa</span>
                                  </div>
                                </a>
                              </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="quick_panel_settings" role="tabpanel">
                        <div>
                            <form class="form">
							<!--begin::Section-->
							<div>
								<h5 class="fw-500 mb-15">Customer Care</h5>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Notifications:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Case Tracking:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-primary" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Support Portal:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
							</div>
							<!--end::Section-->
							<div class="dropdown-divider"></div>
							<!--begin::Section-->
							<div class="pt-2">
								<h5 class="fw-500 mb-15">Reports</h5>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Generate Reports:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Report Export:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Allow Data Collection:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
							</div>
							<!--end::Section-->
							<div class="dropdown-divider"></div>
							<!--begin::Section-->
							<div class="pt-2">
								<h5 class="fw-500 mb-15">Memebers</h5>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Member singup:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Allow User Feedbacks:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
								<div class="form-group mb-0 row align-items-center">
									<label class="col-8 col-form-label">Enable Customer Portal:</label>
									<div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
									</div>
								</div>
							</div>
							<!--end::Section-->
						</form>
                        </div>
                    </div>
                </div>
              </div>
		  </div>
		</div>
	  </div>
  </div>
  <!-- /quick_panel_toggle -->
  
  <!-- quick_shop_toggle -->
  <div class="modal modal-right fade" id="quick_shop_toggle" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			  <div class="px-15 d-flex w-p100 align-items-center justify-content-between">
				<h4 class="m-0">Shopping Cart</h4>
				<a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
					<span class="fa fa-close"></span>
				</a>
			  </div>
		  </div>
		  <div class="modal-body px-30 pb-30 bg-white slim-scroll4">
				<div class="d-flex align-items-center justify-content-between pb-15">
					<div class="d-flex flex-column me-2">
						<a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
						<span class="text-muted">When an unknown printer</span>
						<div class="d-flex align-items-center mt-2">
							<span class="fw-600 me-5 fs-18">$ 125</span>
							<span class="text-muted me-5">for</span>
							<span class="fw-600 me-2 fs-18">4</span>
							<a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
								<i class="fa fa-minus"></i>
							</a>
							<a href="#" class="btn btn-sm btn-success-light btn-icon">
								<i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<a href="#" class="flex-shrink-0">
						<img src="../../images/product/product-1.png" class="avatar h-100 w-100" alt="" />
					</a>
				</div>
			  <div class="dropdown-divider"></div>
				<div class="d-flex align-items-center justify-content-between py-15">
					<div class="d-flex flex-column me-2">
						<a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
						<span class="text-muted">When an unknown printer</span>
						<div class="d-flex align-items-center mt-2">
							<span class="fw-600 me-5 fs-18">$ 125</span>
							<span class="text-muted me-5">for</span>
							<span class="fw-600 me-2 fs-18">4</span>
							<a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
								<i class="fa fa-minus"></i>
							</a>
							<a href="#" class="btn btn-sm btn-success-light btn-icon">
								<i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<a href="#" class="flex-shrink-0">
						<img src="../../images/product/product-2.png" class="avatar h-100 w-100" alt="" />
					</a>
				</div>
			  <div class="dropdown-divider"></div>
				<div class="d-flex align-items-center justify-content-between py-15">
					<div class="d-flex flex-column me-2">
						<a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
						<span class="text-muted">When an unknown printer</span>
						<div class="d-flex align-items-center mt-2">
							<span class="fw-600 me-5 fs-18">$ 125</span>
							<span class="text-muted me-5">for</span>
							<span class="fw-600 me-2 fs-18">4</span>
							<a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
								<i class="fa fa-minus"></i>
							</a>
							<a href="#" class="btn btn-sm btn-success-light btn-icon">
								<i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<a href="#" class="flex-shrink-0">
						<img src="../../images/product/product-3.png" class="avatar h-100 w-100" alt="" />
					</a>
				</div>
			  <div class="dropdown-divider"></div>
				<div class="d-flex align-items-center justify-content-between py-15">
					<div class="d-flex flex-column me-2">
						<a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
						<span class="text-muted">When an unknown printer</span>
						<div class="d-flex align-items-center mt-2">
							<span class="fw-600 me-5 fs-18">$ 125</span>
							<span class="text-muted me-5">for</span>
							<span class="fw-600 me-2 fs-18">4</span>
							<a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
								<i class="fa fa-minus"></i>
							</a>
							<a href="#" class="btn btn-sm btn-success-light btn-icon">
								<i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<a href="#" class="flex-shrink-0">
						<img src="../../images/product/product-4.png" class="avatar h-100 w-100" alt="" />
					</a>
				</div>
			  <div class="dropdown-divider"></div> 
				<div class="d-flex align-items-center justify-content-between py-15">
					<div class="d-flex flex-column me-2">
						<a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
						<span class="text-muted">When an unknown printer</span>
						<div class="d-flex align-items-center mt-2">
							<span class="fw-600 me-5 fs-18">$ 125</span>
							<span class="text-muted me-5">for</span>
							<span class="fw-600 me-2 fs-18">4</span>
							<a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
								<i class="fa fa-minus"></i>
							</a>
							<a href="#" class="btn btn-sm btn-success-light btn-icon">
								<i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<a href="#" class="flex-shrink-0">
						<img src="../../images/product/product-5.png" class="avatar h-100 w-100" alt="" />
					</a>
				</div>
			  <div class="dropdown-divider"></div> 
				<div class="d-flex align-items-center justify-content-between py-15">
					<div class="d-flex flex-column me-2">
						<a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
						<span class="text-muted">When an unknown printer</span>
						<div class="d-flex align-items-center mt-2">
							<span class="fw-600 me-5 fs-18">$ 125</span>
							<span class="text-muted me-5">for</span>
							<span class="fw-600 me-2 fs-18">4</span>
							<a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
								<i class="fa fa-minus"></i>
							</a>
							<a href="#" class="btn btn-sm btn-success-light btn-icon">
								<i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
					<a href="#" class="flex-shrink-0">
						<img src="../../images/product/product-6.png" class="avatar h-100 w-100" alt="" />
					</a>
				</div>  
		  </div>
		  <div class="modal-footer modal-footer-uniform">
			  <div class="d-flex align-items-center justify-content-between mb-10">
				<span class="fw-600 text-muted fs-16 me-2">Total</span>
				<span class="fw-600 text-end">$1248.00</span>
			  </div>
			  <div class="d-flex align-items-center justify-content-between mb-15">
				<span class="fw-600 text-muted fs-16 me-2">Sub total</span>
				<span class="fw-600 text-primary text-end">$4125.00</span>
			  </div>
			  <div class="text-end">
				<button type="button" class="btn btn-primary">Place Order</button>
			  </div>
		  </div>
		</div>
	  </div>
  </div>
  <!-- /quick_shop_toggle -->
  
</div>
<!-- ./wrapper -->
	
	<!-- ./side demo panel -->
	<!-- <div class="sticky-toolbar">	    
	    <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
		</a>
	    <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Image"></span>
		</a>
	    <a id="chat-popup" href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Live Chat" class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
			<span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
		</a>
	</div> -->
	<!-- Sidebar -->
	
	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-sm btn-warning l-h-50">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-18"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-bs-toggle="dropdown">
                      <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                  </button>
                  <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Color me-15"></span>
                        New Group</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span> 
                        Privacy</a>
                  </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" type="button">
                      <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>                    
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">   
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../../images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">You</a>
                                <p class="text-muted fs-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="../../images/avatar/3.jpg" class="avatar avatar-lg">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                           My name is Anne Clarc.         
                        </div>        
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../../images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div><!--chat-log -->
            </div>
            <div class="chat-input">      
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send fs-22"></span>
                    </button>
                </form>      
            </div>
		</div>
	</div>
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="../../src/js/vendors.min.js"></script>
	<script src="../../src/js/pages/chat-popup.js"></script>
    <script src="../../assets/icons/feather-icons/feather.min.js"></script>	
	
	<!-- CRMi App -->
	<script src="../../src/js/jquery.smartmenus.js"></script>
	<script src="../../src/js/menus.js"></script>
	<script src="../../src/js/template.js"></script>

	<script>
		function fetchdata() {
			var brand_id = <?php echo $id; ?>;
			var fd = new FormData();

			fd.append('id', brand_id);
			$.ajax({
				url: '../ajax/brand/account/brand_account_list.php',
				type: 'post',
				contentType: false,
				processData: false,
				data: fd,

				success:function(response) {
					var result = JSON.parse(response);

					var data = result.data;
					console.log(data);

					document.getElementById('brand_name').textContent = data[0].brand_name;
					document.getElementById('contact_name').textContent = data[0].contact_name;
					document.getElementById('brand_name2').textContent = data[0].brand_name;
					document.getElementById('contact_name2').textContent = data[0].contact_name;
					document.getElementById('off_email').textContent = data[0].email;
					document.getElementById('wt_num').textContent = data[0].whatsapp_number;
					document.getElementById('web').textContent = data[0].website;
					document.getElementById('insta_url').textContent = data[0].instagram_url;
				}
			})
		} fetchdata();
	</script>
	
	

</body>

<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/university/horizontal/main/professors.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 14:45:19 GMT -->
</html>
