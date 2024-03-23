<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/university/horizontal/main/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 14:46:59 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Insta | Brand Reg</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="../../src/css/vendors_css.css">
	  
	<!-- Style-->    
	<link rel="stylesheet" href="../../src/css/horizontal-menu.css"> 
	<link rel="stylesheet" href="../../src/css/style.css">
	<link rel="stylesheet" href="../../src/css/skin_color.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
        /* Customize the icon's color and size */
        .material-icons {
            font-size: 18px;
            color: #000;
        }
    </style>
</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../../images/auth-bg/bg-2.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Get started with Us</h2>
								<p class="mb-0">Register a new membership</p>							
							</div>
							<div class="p-40">
								<!-- <form action="https://crm-admin-dashboard-template.multipurposethemes.com/university/horizontal/main/index.html" method="post"> -->
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="material-icons">person</i></span>
											<input type="text" id="b_name" class="form-control ps-15 bg-transparent" placeholder="Brand Name*">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="material-icons">person</i></span>
											<input type="text" id="c_name" class="form-control ps-15 bg-transparent" placeholder="Contact Name*">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="material-icons">email</i></span>
											<input type="email" id="email" class="form-control ps-15 bg-transparent" placeholder="Official Email*">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="fa-brands fa-whatsapp"></i></span>
											<input type="text" id="w_num" class="form-control ps-15 bg-transparent" placeholder="Whatsapp Number*" oninput="onlyNum(this);">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="material-icons">language</i></span>
											<input type="text" id="website" class="form-control ps-15 bg-transparent" placeholder="Website*">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-instagram"></i></span>
											<input type="text" id="i_url" class="form-control ps-15 bg-transparent" placeholder="Instagram url*">
										</div>
									</div>
									
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" id="pass" class="form-control ps-15 bg-transparent" placeholder="Password*" oninput="passCheck();">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" id="cpass" placeholder="Confirm Password*" oninput="passCheck();">
										</div>
										<p id="pass_check"></p>
									</div>
									  <div class="row">
										<!-- <div class="col-12">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
										  </div>
										</div> -->
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button id="submit" class="btn btn-info margin-top-10">Register</button>
										</div>
										<!-- /.col -->
									  </div>
								<!-- </form>				 -->
								<div class="text-center">
									<p class="mt-15 mb-0">Already have an account?<a href="login.php" class="text-danger ms-5"> Sign In</a></p>
								</div>
							</div>
						</div>								

						<!-- <div class="text-center">
						  <p class="mt-20 text-white">- Register With -</p>
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

		function onlyNum(e) {
			e.value = e.value.replace(/[^0-9]/g, '');
		}

		function passCheck() {
			var pass = document.getElementById('pass').value;
			var cpass = document.getElementById('cpass').value;
			var pass_c = document.getElementById('pass_check');
			var s_btn = document.getElementById('submit');

			if (pass === cpass && pass !== '' && cpass !== '') {
				pass_c.innerHTML = '* Passwords match';
				pass_c.style.color = 'green';
				s_btn.disabled = false;
			} else if (pass === '' || cpass === '') {
				pass_c.innerHTML = '* Please enter a password';
				pass_c.style.color = 'red';
				s_btn.disabled = true;
			} else {
				pass_c.innerHTML = '* Passwords do not match';
				pass_c.style.color = 'red';
				s_btn.disabled = true;
			}
		}

		$(document).ready(function(){
			$('#submit').click(function() {
				var b_name = $('#b_name').val();
				var c_name = $('#c_name').val();
				var email = $('#email').val();
				var w_num = $('#w_num').val();
				var website = $('#website').val();
				var i_url = $('#i_url').val();
				var pass = $('#pass').val();

				if(b_name == '') {
					toastr.error('Enter Brand name');
				} else if (c_name == '') {
					toastr.error('Enter contact name');
				} else if (email == '') {
					toastr.error('Enter Email address');
				} else if (w_num == '') {
					toastr.error('Enter WhatsApp number');
				} else if (website == '') {
					toastr.error('Enter Website');
				} else if (i_url == '') {
					toastr.error('Instagram URL');
				} else {
					var fd = new FormData();

					fd.append('b_name', b_name);
					fd.append('c_name', c_name);
					fd.append('email', email);
					fd.append('w_num', w_num);
					fd.append('website', website);
					fd.append('i_url', i_url);
					fd.append('pass', pass);

					$.ajax({
						url: '../ajax/brand/auth/reg_auth.php',
						type: 'post',
						processData: false,
						contentType: false,
						data: fd,

						success:function(response) {
							var result = JSON.parse(response);

							if(result.status == 'Success') {
								toastr.success('Registerd Successfully');

								setTimeout(() => {
									window.location.href = 'login.php';
								}, 1000);
							} else {
								toastr.error('Unable to register');
							}
						}
					})
				}
				
			})
		});
	</script>
	
	
</body>

<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/university/horizontal/main/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 14:47:00 GMT -->
</html>
