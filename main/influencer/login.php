<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="https://crm-admin-dashboard-template.multipurposethemes.com/images/favicon.ico"> -->

    <title>Insta | influencer Login</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="../../src/css/vendors_css.css">
	  
	<!-- Style-->    
	<link rel="stylesheet" href="../../src/css/horizontal-menu.css"> 
	<link rel="stylesheet" href="../../src/css/style.css">
	<link rel="stylesheet" href="../../src/css/skin_color.css">	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url(../../images/auth-bg/bg-1.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Let's Get Started</h2>
								<p class="mb-0">Sign in to continue</p>							
							</div>
							<div class="p-40">
								<!-- <form action="https://crm-admin-dashboard-template.multipurposethemes.com/university/horizontal/main/index.html" method="post"> -->
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
											<input type="text" id="email" class="form-control ps-15 bg-transparent" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" id="pass" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										<!-- <div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div> -->
										<!-- /.col -->
										<!-- <div class="col-6">
										 <div class="fog-pwd text-end">
											<a href="javascript:void(0)" class="hover-warning"><i class="ti-lock"></i> Forgot pwd?</a><br>
										  </div>
										</div> -->
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button id="submit" class="btn btn-danger mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								<!-- </form>	 -->
								<div class="text-center">
									<p class="mt-15 mb-0">Don't have an account? <a href="register.php" class="text-warning ms-5">Sign Up</a></p>
								</div>	
							</div>						
						</div>
						<!-- <div class="text-center">
						  <p class="mt-20 text-white">- Sign With -</p>
						  <p class="gap-items-2 mb-20">
							  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
							</p>	
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="../../src/js/vendors.min.js"></script>
	<script src="../../src/js/pages/chat-popup.js"></script>
    <script src="../../assets/icons/feather-icons/feather.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		$(document).ready(function() {
			$('#submit').click(function() {
				var email = $('#email').val();
				var pass  = $('#pass').val();

				if(email == '') {
					toastr.warning('Enter Email');
				} else if (pass == '') {
					toastr.warning('Enter Password');
				} else {
					var fd = new FormData();

					fd.append('email', email);
					fd.append('pass', pass);

					$.ajax({
						url: '../ajax/influencer/auth/login_auth.php',
						type: 'post',
						processData: false,
						contentType: false,
						data: fd,
						success:function(response) {
							var result = JSON.parse(response);
							if(result.status == 'Success') {
								toastr.success('Logged in successfully');
								setTimeout(()=>{
									window.location.href = 'index.php';
								}, 1000);
							} else {
								toastr.error('Invalid credentials');
							}
						}
					})
				}
			})
		});
	</script>
</body>

</html>
