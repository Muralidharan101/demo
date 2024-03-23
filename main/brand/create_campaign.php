<?php
	require_once '../ajax/brand/auth/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/university/horizontal/main/forms_general.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 14:47:50 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://crm-admin-dashboard-template.multipurposethemes.com/images/favicon.ico">

    <title>Media Connect | Create Campaigns </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="../../src/css/vendors_css.css">
	  
	<!-- Style-->    
	<link rel="stylesheet" href="../../src/css/horizontal-menu.css"> 
	<link rel="stylesheet" href="../../src/css/style.css">
	<link rel="stylesheet" href="../../src/css/skin_color.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .image-container {
        position: relative;
		border-radius: 50%;
        overflow: hidden;
        width: 150px; /* Set a fixed width for the container */
        height: 150px; /* Set a fixed height for the container */
        margin: 0 auto; /* Center the image container horizontally */
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .image-container img {
        display: block;
		border-radius: 50%;
        width: 100%; /* Image fills the container width */
        height: 100%; /* Image fills the container height */
        object-fit: cover; /* Maintain aspect ratio */
        transition: transform 0.3s, box-shadow 0.3s;
    }


    button:focus{
    outline: none;
    }

    .page-ath-wrap {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .page-ath-content {
        background: #fff;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 60px 40px;
    }

    .page-ath-heading {
        font-size: 28px;
        font-weight: 700;
        color: #231f20;
        padding-bottom: 40px;
    }


    .page-ath-form,
    .page-ath-header,
    .page-ath-footer,
    .page-ath-text {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    .page-ath-form {
        padding-bottom: 100px;
    }

    .page-ath-header {
        visibility: hidden;
        opacity: 0;
    }

    .page-ath-footer {
        font-family: 'Roboto', sans-serif;
        padding-top: 40px;
    }
    .page-ath-footer p{
        font-size: 15px;
    }
    .page-ath-footer p a{
        display: inline-block;
        margin-left: 3px;
        color: #000;
        font-weight: 600;
        text-decoration: underline;
    }

    .page-ath-footer p a:hover{
        color: #5161ce;
    }
    .auth-part-logo {
        
    }
    .page-content {
        margin-left: 260px;
        transition: all .5s;
        padding: 15px;
    }
    .page-content.page-active{
        margin-left: 0px;
    }




    /*---------signup-step-------------*/
    .register-form-content{
        justify-content: center;
    }
    .register-form-content .page-ath-form{
        padding-bottom: 0px;
    }
    .register-form-content .form-align-box,
    .register-form-content .page-ath-form,
    .register-form-content .wizard,
    .register-form-content .register-wizard-box,
    .register-form-content .tab-content,
    .register-form-content .wizard .tab-pane{
        height: 100%;
    }
    .register-form-content .page-ath-header{
        display: none;
    }
    .register-wizard-box .tab-pane h4{
        margin-top: 0px;
        font-size: 18px;
        color: #8e8c8c;
        margin-bottom: 12px;
    }
    .register-wizard-box .tab-pane h3{
        font-size: 26px;
        font-weight: 700;
        color: #231f20;
        padding-bottom: 25px;
    }

    .wizard {
        position: relative;
    }
    .wizard .nav-tabs {
        position: relative;
        margin-bottom: 0;
        border-bottom-color: transparent;
    }

    .wizard > div.wizard-inner {
        position: absolute;
        bottom: 20px;
    }

    .wizard .nav-tabs > li > a.active .round-tab, 
    .wizard .nav-tabs > li > a.active:hover .round-tab, 
    .wizard .nav-tabs > li > a.active:focus .round-tab{
        cursor: default;
        background-color: #5161ce;
        color: #fff;
    }

    .wizard li.active span.round-tab {
        background: #0db02b;
        color: #fff;
        border-color: #0db02b;
    }
    .wizard li.active span.round-tab i{
        color: #5bc0de;
    }
    .wizard .nav-tabs > li.active > a i{
        color: #0db02b;
    }

    .wizard .nav-tabs > li a {
        padding: 15px;
        position: relative;
    }

    .wizard .nav-tabs > li{
        width: 25%;
        position: relative;
    }

    .wizard .nav-tabs > li a .round-tab{
        width: 30px;
        height: 30px;
        color: #868cbd;
        font-weight: 600;
        background-color: #ced2f2;
        display: inline-block;
        border-radius: 50%;
        padding-top: 6px;
        text-align: center;
        z-index: 1;
        position: relative;
        transition: 0.5s;
    }

    .wizard .nav-tabs > li:before,
    .wizard .nav-tabs > li:after{
        content: '';
        position: absolute;
        height: 2px;
        width: 100%;
        top: 50%;
        background-color: #ced2f2;
        left: 15px;
        transition: 0.5s;
    }
    .wizard .nav-tabs > li:after{
        background-color: #42b161;
        width: 0;    
    }

    .wizard .nav-tabs > li.done a .round-tab {
        background-color: #42b161;
        color: #fff;
    }

    .wizard .nav-tabs > li.done:after{
        width: 100%;
    }

    .wizard .nav-tabs > li.done.active a .round-tab{
        background-color: #5161ce;
        color: #fff;
    }

    .wizard .nav-tabs > li.done.active ~ li .round-tab {
        background: #ced2f2;
        color: #868cbd;
    }

    .wizard .nav-tabs > li.active:after, 
    .wizard .nav-tabs > li.active~li:after{
        width: 0;
    }


    .wizard .nav-tabs > li:last-child:before,
    .wizard .nav-tabs > li:last-child:after{
        display: none;
    }

    .wizard .nav-tabs > li a.disabled{
        cursor: not-allowed;
    }
    .wizard .nav-tabs > li a i{
        position: absolute;
        top: -15px;
        font-style: normal;
        font-weight: 400;
        white-space: nowrap;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 12px;
        font-weight: 700;
        color: #000;
    }



    .wizard .tab-content>.active{
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }

    .wizard .tab-pane {
        position: relative;
        padding-top: 40px;
    }
    .step-btn{
        background-color: transparent;
    }
    .step-btn i{
        width: 40px;
        height: 40px;
        background-color: #e9e9ea;
        display: inline-block;
        border-radius: 50%;
        color: #5e666b;
        font-size: 15px;
        text-align: center;
        padding-top: 12px;
    }
    .step-btn span{
        display: inline-block;
        font-weight: 700;
        font-size: 16px;
        color: #5e666b;
        letter-spacing: 0.3px;
    }
    .wizard h3 {
        margin-top: 0;
    }
    .prev-step,
    .next-step{
        border: none;
        margin-top: 30px;
    }
    .prev-step span{
        margin-left: 10px;
    }
    .next-step span{
        margin-right: 10px;
        color: #5161ce;
    }
    .next-step i {
            box-shadow: 0px 4px 12px rgba(81, 97, 206, 0.5);
        background-color: #5161ce;
        color: #fff;
    }

    .form-input-steps .custom-control.custom-checkbox label{
        font-family: 'Roboto', sans-serif;
        font-size: 15px;
    }

    .form-input-steps .custom-control.custom-checkbox label a{
        display: inline-block;
        margin-left: 3px;
        color: #000;
        font-weight: 600;
        text-decoration: underline;
        
    }
    .form-input-steps .custom-control.custom-checkbox label a:hover{
        color: #5161ce;
    }

    .form-control {
        height: auto;
        padding: 16px 18px;
        border-radius: 13px;
        font-weight: 400;
        color: #333;
        border-color: #e4e4e4;
    }
    .form-select {
        height: auto;
        padding: 16px 18px;
        border-radius: 13px;
        font-weight: 400;
        color: #333;
        border-color: #e4e4e4;
    }

    .list-inline>li {
        display: inline-block;
        padding-right: 5px;
        padding-left: 5px;
    }
    .progress{
      border-radius: 50px;
    }
    .progress-bar{
      background-color: #5161ce;
    }
    .image-container {
        cursor: pointer;
        border: 2px solid transparent;
        transition: border-color 0.3s;
    }

    .selected {
        border-color: blue; /* Change the border color to highlight the selection */
    }

    .text-container {
    cursor: pointer;
    background-color: blue;
    color: white;
    padding: 10px;
    border-radius: 5px;
}

.text-container.selected {
  background-color: red;
}


  </style>
</head>
<body class="layout-top-nav light-skin theme-primary fixed">
	
<div class="wrapper">
	<div id="loader"></div>

	<?php include('header.php'); ?>
  
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row align-items-center justify-content-md-center h-p100">			  
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Create Campaigns</h4>
                <!-- <h6 class="box-subtitle">You can find the <a href="http://www.jquery-steps.com" target="_blank">official website</a></h6> -->
            </div>
            <div class="box-body wizard-content">
                <div class="tab-wizard wizard-circle wizard clearfix" role="application" id="steps-uid-0">
                    <!-- Step 1 -->
                    <h6 id="steps-uid-0-h-0" tabindex="-1" class="title current">Campaign Details</h6>
                      <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">
                      <div class="row d-flex justify-content-between">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="firstName5" class="form-label">Campaign Poster</label>
                            <input type="file" class="form-control required" id="poster1" fdprocessedid="lkwxv" data-ddg-inputtype="identities.firstName">
                          </div>
                          <div class="form-group">
                              <label for="campaign name" class="form-label">Campaign Name :</label>
                              <input type="text" class="form-control required" id="camp_name" data-ddg-inputtype="unknown">
                          </div>
                          <div class="form-group">
                              <label for="" class="form-label">Campaign Type:</label>
                              <select class="form-select required" name="campaign type" id="camp_type" >
                                <option value="">-- Select Campaign Type --</option>
                                <option value="reels">Reels</option>
                                <option value="post">Post</option>
                                <option value="feeds">Feeds</option>
                                <option value="all">All</option>

                              </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group d-none" id="poster_preview" style="text-align: center;">
                                <div style="display: inline-block;">
                                    <img src="" id="preview_image" alt="poster" style="max-width: 100%; max-height: 400px;">
                                </div>
                            </div>
                        </div>
                      </div>
                    </section>
                    <!-- Step 2 -->
                    <h6 id="steps-uid-0-h-1" tabindex="-1" class="title">Budget & Duration</h6>
                      <section id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body" aria-hidden="true" style="display: none;">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="int123" class="form-label">Budget :</label>
                            <div class="input-group mb-3">
                              <div class="input-group-addon d-flex align-items-center" style="width: 40px;">
                                  <i class="fa fa-inr"></i>
                              </div>
                              <input type="number" class='form-control' id="bud">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="int123" class="form-label">Start Date and Time :</label>
                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="start_date_time" data-ddg-inputtype="unknown">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="int123" class="form-label">End Date and Time :</label>
                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="end_date_time" data-ddg-inputtype="unknown">
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- Step 3 -->
                    <h6 id="steps-uid-0-h-2" tabindex="-1" class="title">Influencer Details</h6>
                      <section id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body" aria-hidden="true" style="display: none;">
                    <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                              <label for="" class="form-label">Influencer Type:</label>
                              <select class="form-select required" name="campaign type" id="inf_type" >
                                <option value="">-- Select Influencer Type --</option>
                                <option value="food">Food</option>
                                <option value="travle">Travel</option>
                                <option value="techie">Techie</option>
                                <option value="fashion">Fashion</option>
                                <option value="life style">Life Style</option>
                                <option value="finance">Finance</option>
                              </select>
                          </div>
                        </div>  
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">Suggested Influencers</label>
                                <div class="owl-carousel owl-theme mb-3" id="imageCarousel">
                                    
                                </div>
                            </div>
                        </div>

                      </div>
                    </section>
                    <!-- Step 4 -->
                    <h6 id="steps-uid-0-h-3" tabindex="-1" class="title">Confirmation</h6>
                    <section id="steps-uid-0-p-3" role="tabpanel" aria-labelledby="steps-uid-0-h-3" class="body" aria-hidden="true" style="display: none;">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="decisions1" class="form-label">Comments</label>
                                    <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="c-inputs-stacked">
                                        <input type="checkbox" id="checkbox_1">
                                        <label for="checkbox_1" class="d-block">Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                              <div class="d-flex justify-content-end">
                                <button class="btn btn-primary" id="submit">Submit</button>
                              </div>
                            </div>
                        </div>
                    </section>
                  </div>
              </div>
          </div>
        </div>


				<!-- <div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Create Campaign</h4>
						</div>

							<div class="box-body">
              <div class="form-group">
                <label class="form-label">Campaign Poster</label>
                <div class="input-group mb-3">
                  <input type="file" id="poster" class="form-control" accept=".png, .jpeg, .jpg, .webp, .mp4, .mvk">
                </div>
              </div>
								<div class="form-group">
									<label class="form-label">Influencer Type</label>
									<div class="input-group mb-3">
										<span class="input-group-text"><i class="ti-user"></i></span>
										<select class="form-select" fdprocessedid="r1vfpf" data-ddg-inputtype="unknown" id="i_type">
                        <option value="food">Food</option>
                        <option value="travel">Travel</option>
                        <option value="lifestyle">Lifestyle</option>
                        <option value="fashion">Fashion</option>
                        <option value="techie">Techie</option>
                        <option value="finance">Finance</option>
                    </select>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Budget</label>
									<div class="input-group mb-3">
                    
                    <div class="input-group-addon">
                      <i class="fa fa-dollar"></i>
                    </div>
                    <input type="number" class='form-control' id="budget">
                    
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Campaign Type</label>
									<div class="input-group mb-3">
										<span class="input-group-text"><i class="ti-user"></i></span>
										<select class="form-select" fdprocessedid="r1vfpf" data-ddg-inputtype="unknown" id="c_type">
                      <option value="reels">Reels</option>
                      <option value="post">Post</option>
                      <option value="feeds">Feeds</option>
                      <option value="all">All</option>
                    </select>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Duration</label>
									<div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="duration">
                  </div>
								</div>
                <label class="form-label">Suggested Influencers</label>
                <div class="owl-carousel owl-theme mb-3">
                  <div class="item">
                    <div class="image-container">
                      <img src="../../images/card/img1.jpg" alt="Card image cap">
                    </div>
                  
                  </div>
                  <div class="item">
                    <div class="image-container">
                      <img src="../../images/card/img4.jpg" alt="Card image cap">
                    </div>
                  
                  </div>
                  <div class="item">
                    <div class="image-container">
                      <img src="../../images/card/img3.jpg" alt="Card image cap">
                    </div>
                  
                  </div>

                </div>

							</div>

              

							<div class="box-footer text-end">
								<button id="" class="btn btn-primary">
								  Submit
								</button>
							</div>  

					  </div>
					
				</div>
		    </div> -->

        <!-- <div class="col-xl-12 col-12">
					<div class="box">
						<div class="box-header with-border d-flex justify-content-between">
              <div>
						    <h3 class="box-title">Campaign details</h3>
              </div>
              <div>
                <button id="create_camp" class="btn btn-primary">
                  Create Campaign <span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span>
                </button>
              </div>
						</div>
						
						<div class="box-body">
							<div class="table-responsive">
							  <table id="c_table" class="table mt-0 table-hover no-wrap dataTable no-footer">
								<thead>
									<tr>
										<th>SI.No</th>
										<th>Influncer Type</th>
										<th>Start Budget</th>
										<th>End Budget</th>
										<th>Campaign Type</th>
										<th>Start Date & Time</th>
										<th>End Date & Time</th>
									</tr>
								</thead>
								<tbody>
									
								</tbody>
							
							  </table>
							</div>
						</div>
						
					  </div>
				</div> -->
		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  
   <footer class="main-footer">
	  &copy; <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.
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
	<script src="../../assets/vendor_components/ion-rangeSlider/js/ion.rangeSlider.min.js"></script>	
	<script src="../../assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>

	<script src="../../assets/vendor_components/select2/dist/js/select2.full.js"></script>
	<script src="../../assets/vendor_plugins/input-mask/jquery.inputmask.js"></script>
	<script src="../../assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="../../assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js"></script>
	<script src="../../assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="../../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="../../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="../../assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	<script src="../../assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js"></script>
	<script src="../../assets/vendor_plugins/iCheck/icheck.min.js"></script>
  <script src="../../assets/vendor_components/datatable/datatables.min.js"></script>
  
	<script src="../../assets/vendor_plugins/bootstrap-slider/bootstrap-slider.js"></script>
	<script src="../../assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
	<script src="../../assets/vendor_components/flexslider/jquery.flexslider.js"></script>
  <script src="../../assets/vendor_components/jquery-steps-master/build/jquery.steps.js"></script>
    <script src="../../assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
    <script src="../../assets/vendor_components/sweetalert/sweetalert.min.js"></script>
    <script src="../../assets/vendor_components/dropzone/dropzone.js"></script>
	
	<!-- CRMi App -->
	<script src="../../src/js/jquery.smartmenus.js"></script>
	<script src="../../src/js/menus.js"></script>
	<script src="../../src/js/template.js"></script>
    
    <script src="../../src/js/pages/advanced-form-element.js"></script>
    <script src="../../src/js/pages/range-sliders.init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../../src/js/pages/data-table.js"></script>
    <script src="../../src/js/pages/steps.js"></script>
    
    <script>
      var brandId;
      var selectedInfluencer; 
      var selectedInfluencerId;



      // $(document).ready(function(){

//         function showPrevious() {
//         // Logic to display the previous step
//         // You can handle the visibility of steps using JavaScript
//         // For example:
//         document.getElementById('steps-uid-0-p-0').style.display = 'block';
//         document.getElementById('steps-uid-0-p-1').style.display = 'none';
//         document.getElementById('steps-uid-0-p-2').style.display = 'none';
//         document.getElementById('steps-uid-0-p-3').style.display = 'none';
//     }
//     function showNext() {
//     const steps = document.querySelectorAll('[id^="steps-uid-0-p-"]'); // Select all steps
//     for (let i = 0; i < steps.length; i++) {
//         if (steps[i].style.display === 'block') { // Find the currently displayed step
//             steps[i].style.display = 'none'; // Hide the current step
//             if (i + 1 < steps.length) {
//                 steps[i + 1].style.display = 'block'; // Show the next step
//                 break;
//             }
//         }
//     }
// }



        const fileInput = document.getElementById('poster1');
        const previewDiv = document.getElementById('poster_preview');

        fileInput.addEventListener('change', function() {
          const previewImage = document.getElementById('preview_image');
          const file = fileInput.files[0];
          const reader = new FileReader();

          reader.onload = function() {
            previewImage.src = reader.result;
            
            // Remove 'd-none' class from the preview image element
            previewDiv.classList.remove('d-none');
            // Add 'd-block' class to display the preview image
            previewDiv.classList.add('d-block');
          };

          if (file) {
            reader.readAsDataURL(file);
          } else {
            previewImage.src = "";
          }
        });

        const images = document.querySelectorAll('.image-container img');

        images.forEach(img => {
            img.addEventListener('click', function() {
                // Toggle a selected class to highlight the selection
                img.classList.toggle('selected');
            });
        });
      //   // $('#range_03').on('input', function() {
      //   //     var sliderValue = $(this).val();
      //   //     var amounts = sliderValue.split(';');
      //   //     var openAmount = amounts[0];
      //   //     var closeAmount = amounts[1];

      //   //     console.log('Open Amount:', openAmount);
      //   //     console.log('Close Amount:', closeAmount);
      //   // });

        $('#duration').daterangepicker({
            timePicker: true,
            timePickerIncrement: 1,
            timePicker24Hour: true,
            timePickerSeconds: true,
            opens: 'left',
            locale: {
                format: 'YYYY-MM-DD HH:mm:ss'
            }
        });

        $('#duration').on('apply.daterangepicker', function(ev, picker) {
            var startDate = picker.startDate.format('YYYY-MM-DD HH:mm:ss');
            var endDate = picker.endDate.format('YYYY-MM-DD HH:mm:ss');

            console.log('Start Date:', startDate);
            console.log('End Date:', endDate);
        });

      //   $('#submit').click(function() {
      //       var brand_id = <?php echo $id; ?>;
      //       console.log(brand_id);

      //       var i_type = $('#i_type').val();
      //       // var sliderValue = $('#range_03').val();
      //       // var amounts = sliderValue.split(';');
      //       // var openAmount = amounts[0];
      //       // var closeAmount = amounts[1];
      //       var budget = $('#budget').val();
      //       var c_type = $('#c_type').val();
      //       var selectedDateTimes = $('#duration').data('daterangepicker');
      //       var startDate = selectedDateTimes.startDate.format('YYYY-MM-DD HH:mm:ss');
      //       var endDate = selectedDateTimes.endDate.format('YYYY-MM-DD HH:mm:ss');
      //       var poster = $('#poster')[0].files[0];

      //       if (i_type == '') {
      //           toastr.error('Select influencer type');
      //       } else if (c_type == '') {
      //           toastr.error('Select campaign type');
      //       } else if (budget == '') {
      //           toastr.error("Enter Budget");
      //       }else {
      //           if (poster) {
      //               if (poster.type.match('image.*')) {
      //                   if (poster.size > 10 * 1024 * 1024) {
      //                       toastr.error('Image size should be less than 10 MB.');
      //                       return;
      //                   }

      //                   var img = new Image();
      //                   img.src = URL.createObjectURL(poster);
      //                   img.onload = function () {
      //                       if (img.width > 1200 || img.height > 1200) {
      //                           toastr.error('Image dimensions should be 1200px x 1200px or less.');
      //                           return;
      //                       }
      //                       uploadFile(poster, brand_id, i_type, budget, c_type, startDate, endDate);
      //                   };
      //               } else if (poster.type.match('video.*')) {
      //                   if (poster.size > 10 * 1024 * 1024) {
      //                       toastr.error('Video size should be less than 10 MB.');
      //                       return;
      //                   }

      //                   var video = document.createElement('video');
      //                   var objectUrl = URL.createObjectURL(poster);
      //                   video.preload = 'metadata';
      //                   video.onloadedmetadata = function() {
      //                       window.URL.revokeObjectURL(objectUrl);
      //                       if (video.duration > 30) {
      //                           toastr.error('Video duration should be less than 30 seconds.');
      //                           return;
      //                       }
      //                       uploadFile(poster,brand_id, i_type, budget, c_type, startDate, endDate);
      //                   };
      //                   video.src = objectUrl;
      //               } else {
      //                   toastr.error('Please select a valid image or video file.');
      //               }
      //               // Continue with upload process
      //               // uploadFile(poster, brand_id, i_type, openAmount, closeAmount, c_type, startDate, endDate);
      //           } else {
      //               // If 'poster' is not selected
      //               uploadFile(null, brand_id, i_type, budget, c_type, startDate, endDate);
      //           }
      //       }
      //   });

      //   function uploadFile(file, id, inf_type, budget, c_type, startDate, endDate) {
      //       var fd = new FormData();

      //       if (file) {
      //           fd.append('poster', file);
      //       }

      //       console.log(budget);

      //       fd.append('id', id);
      //       fd.append('inf_type', inf_type);
      //       fd.append('budget', budget);
      //       // fd.append('openAmount', openAmount);
      //       // fd.append('closeAmount', closeAmount);
      //       fd.append('c_type', c_type);
      //       fd.append('startDate', startDate);
      //       fd.append('endDate', endDate);

      //       $.ajax({
      //           url: '../ajax/brand/create_campaign.php',
      //           type: 'post',
      //           contentType: false,
      //           processData: false,
      //           data: fd,
      //           success: function(response) {
      //               var result = JSON.parse(response);

      //               if (result.status == 'Success') {
      //                   toastr.success('Campaign created successfully', 'Success');
      //               } else {
      //                   toastr.error('Unable to create campaign', 'Error');
      //               }
      //           }
      //       });
      //   }


      //   function fetchdata() {
      //     var brand_id = <?php echo $id; ?>
          
      //     var fd = new FormData();
      //     fd.append('id', brand_id);
          
      //     $.ajax({
      //       url: '../ajax/brand/list_campaign.php',
      //       type: 'post',
      //       contentType: false,
      //       processData: false,
      //       data: fd,

      //       success:function(response){
      //         var result = JSON.parse(response);
      //         var data = result.data;

      //         var table = $('#c_table').DataTable();

      //         data.map(obj => {
      //             table.row.add([
      //                 obj.id,
      //                 obj.influencer_type,
      //                 // obj.start_budget,
      //                 // obj.end_budget,
      //                 obj.campaign_type,
      //                 obj.start_dateTime,
      //                 obj.end_dateTime
      //             ]).draw(false);
      //         })
      //       }
      //    })
      //   } fetchdata();
      // })

      $(document).ready(function(){
        
      })

      // var submitButton = document.createElement('button');
      // submitButton.id = 'submit';
      // submitButton.textContent = 'Submit';
      // submitButton.classList.add('btn', 'btn-primary');

      // Append the button to a specific element in the DOM
      // document.getElementById('steps-uid-0-p-3').appendChild(submitButton);

      // var actionsElement = document.getElementById('steps-uid-0').getElementsByClassName('actions')[0];
      // actionsElement.style.display = 'none';

      // Add an event listener to the dynamically created submit button
      // submitButton.addEventListener('click', function() {
          // Access and gather form data and perform actions for data submission
          // var campName = document.getElementById('camp_name').value;
          // var campType = document.getElementById('camp_type').value;
 
      // });

      $(document).ready(function() {
    $('#submit').click(function() {
      
        var brand_id = <?php echo $id; ?>;
        console.log(1);
        console.log(brand_id);

        var camp_name = $('#camp_name').val();
        var camp_type = $('#camp_type').val();
        var budget = $('#bud').val();
        var start_date_time = $('#start_date_time').val();
        var end_date_time = $('#end_date_time').val();
        var inf_type = $('#inf_type').val();
        var comments = $('#decisions1').val();
        var agree_terms = $('#checkbox_1').prop('checked');

        // Extract file data for the campaign poster
        var poster = $('#poster1')[0].files[0];

        // Validate form inputs
        if (camp_name === '') {
            toastr.error('Please enter Campaign Name');
        } else if (camp_type === '') {
            toastr.error('Please select Campaign Type');
        } else if (budget === '') {
            toastr.error('Please enter Budget');
        } else if (start_date_time === '' || end_date_time === '') {
            toastr.error('Please select Start and End Date & Time');
        } else if (inf_type === '') {
            toastr.error('Please select Influencer Type');
        } else if (!agree_terms) {
            toastr.error('Please agree to the Terms and Conditions');
        } else {
            // Perform file validation if a poster is uploaded
            if (poster) {
              if (poster.type.match('image.*')) {
                        if (poster.size > 10 * 1024 * 1024) {
                            toastr.error('Image size should be less than 10 MB.');
                            return;
                        }

                        var img = new Image();
                        img.src = URL.createObjectURL(poster);
                        img.onload = function () {
                            if (img.width > 1200 || img.height > 1200) {
                                toastr.error('Image dimensions should be 1200px x 1200px or less.');
                                return;
                            }
                            uploadFile(brand_id, poster, camp_name, camp_type, budget, start_date_time, end_date_time, inf_type, comments);
                        };
                    } else if (poster.type.match('video.*')) {
                        if (poster.size > 10 * 1024 * 1024) {
                            toastr.error('Video size should be less than 10 MB.');
                            return;
                        }

                        var video = document.createElement('video');
                        var objectUrl = URL.createObjectURL(poster);
                        video.preload = 'metadata';
                        video.onloadedmetadata = function() {
                            window.URL.revokeObjectURL(objectUrl);
                            if (video.duration > 30) {
                                toastr.error('Video duration should be less than 30 seconds.');
                                return;
                            }
                            uploadFile(brand_id, poster, camp_name, camp_type, budget, start_date_time, end_date_time, inf_type, comments);
                        };
                        video.src = objectUrl;
                    } else {
                        toastr.error('Please select a valid image or video file.');
                    }
                    // Continue with upload process
                // uploadFile(brand_id, poster, camp_name, camp_type, budget, start_date_time, end_date_time, inf_type, comments);
            } else {
                // If no poster is uploaded
                uploadFile(brand_id, null, camp_name, camp_type, budget, start_date_time, end_date_time, inf_type, comments);
            }
        }
    });

    function uploadFile(brand_id,poster, camp_name, camp_type, budget, start_date_time, end_date_time, inf_type, comments) {
        var fd = new FormData();

        if (poster) {
            fd.append('poster', poster);
        }
        fd.append('id', brand_id);
        fd.append('inf_id', selectedInfluencerId);
        fd.append('camp_name', camp_name);
        fd.append('camp_type', camp_type);
        fd.append('budget', budget);
        fd.append('start_date_time', start_date_time);
        fd.append('end_date_time', end_date_time);
        fd.append('inf_type', inf_type);
        fd.append('comments', comments);

        // Send data to backend via AJAX
        $.ajax({
            url: '../ajax/brand/create_campaign.php',
            type: 'post',
            contentType: false,
            processData: false,
            data: fd,
            success: function(response) {
                var result = JSON.parse(response);

                if (result.status === 'Success') {
                    toastr.success('Campaign created successfully', 'Success');
                } else {
                    toastr.error('Unable to create campaign', 'Error');
                }
            }
        });
    }

    // Other existing functions...
});

      $(document).ready(function(){

          $(".owl-carousel").owlCarousel({
              items: 4, 
              loop: false,
              margin: 10,
              nav: true,
              responsiveClass: true,
              responsive:{
                  0:{
                      items: 1,
                  },
                  600:{
                      items: 3,
                  },
                  1000:{
                      items: 6,
                  }
              }
          });

      });

      function fetchInfData() {
        $.ajax({
          url: '../ajax/influencer/influencer_list.php',
          type: 'get',

          success:function(response) {
            var result = JSON.parse(response);

            var data = result.data;
            var slider = $('#imageCarousel');

            data.forEach(obj => {
                var influencerName = obj.name;
                var influencerId = obj.id;

                var carouselItem = $('<div>').addClass('item');
                var textContainer = $('<div>').addClass('text-container');
                var influencerText = $('<span>').text(influencerName);

                textContainer.append(influencerText);
                carouselItem.append(textContainer);
                slider.owlCarousel('add', carouselItem).owlCarousel('update');

                textContainer.click(function() {
                    selectedInfluencer = $(influencerText).text();
                    selectedInfluencerId = influencerId;

                    console.log('Selected influencer:', selectedInfluencer);
                    console.log('Selected influencer ID:', selectedInfluencerId);
                    $('.text-container').removeClass('selected');
                    $(this).addClass('selected');
                });
            });
          }
        })
      } fetchInfData()

      

    // let currentStep = 0;
    // const steps = document.querySelectorAll('.body');

    // function showStep(index) {
    //     for (let i = 0; i < steps.length; i++) {
    //         if (i === index) {
    //             steps[i].classList.add('current');
    //             steps[i].removeAttribute('style');
    //         } else {
    //             steps[i].classList.remove('current');
    //             steps[i].style.display = 'none';
    //         }
    //     }
    // }

    // function nextStep() {
    //     if (currentStep < steps.length - 1) {
    //         currentStep++;
    //         showStep(currentStep);
    //         updateActions();
    //     }
    // }

    // function prevStep() {
    //     if (currentStep > 0) {
    //         currentStep--;
    //         showStep(currentStep);
    //         updateActions();
    //     }
    // }

    // function submitForm() {
    //     // Handle form submission logic here
    //     alert('Form submitted!');
    // }

    // function updateActions() {
    //     const prevButton = document.querySelectorAll('.actions ul li')[0];
    //     const nextButton = document.querySelectorAll('.actions ul li')[1];
    //     const submitButton = document.querySelectorAll('.actions ul li')[2];

    //     if (currentStep === 0) {
    //         prevButton.classList.add('disabled');
    //     } else {
    //         prevButton.classList.remove('disabled');
    //     }

    //     if (currentStep === steps.length - 1) {
    //         nextButton.style.display = 'none';
    //         submitButton.style.display = 'block';
    //     } else {
    //         nextButton.style.display = 'block';
    //         submitButton.style.display = 'none';
    //     }
    // }

    // window.onload = function () {
    //     showStep(currentStep);
    //     updateActions();
    // };

    // ------------register-steps--------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var $target = $(e.target);
        if ($target.hasClass('disabled')) {
            return false;
       `` }
      
        // handle with prgressbar 
        var step = $(e.target).data('step');
        var percent = (parseInt(step) / 4) * 100;
        $('.progress-bar').css({ width: percent + '%' });
        $('.progress-bar').text('Step ' + step + ' of 4');
      
    });

    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        var $target = $(e.target);
        $target.parent().addClass('active');
    });

    $('a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
        var $target = $(e.target);
        $target.parent().removeClass('active');
    });


    $(".next-step").click(function (e) {
        var $active = $('.wizard .nav-tabs li a.active');
        $active.parent().next().children().removeClass('disabled');
        $active.parent().addClass('done');
        nextTab($active);
    });

    $(".prev-step").click(function (e) {
        var $active = $('.wizard .nav-tabs li a.active');
        prevTab($active);
    });
});

function nextTab(elem) {
    $(elem).parent().next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).parent().prev().find('a[data-toggle="tab"]').click();
}

    </script>
	
</body>

<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/university/horizontal/main/forms_general.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 14:47:50 GMT -->
</html>
