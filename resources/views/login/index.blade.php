<!DOCTYPE html>
<html lang="en">
<head>
	<title>Verval</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Loginv2/images/icons/favicon.ico"/>
    <link rel="stylesheet" href="{{asset ('Loginv2/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('Loginv2/vendor/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset ('Loginv2/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{asset ('Loginv2/vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" href="{{asset ('Loginv2/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset ('Loginv2/vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset ('Loginv2/font/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset ('Loginv2/font/iconic/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset ('Loginv2/css/util.css')}}">
	<link rel="stylesheet" href="{{asset ('Loginv2/css/main.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css"> -->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
				
			<div class="wrap-login100">
					@if (session('Failed'))  
					     
				@endif
				@if (session('Logout'))  
					     
				@endif
				<form class="login100-form validate-form" action="/postlogin" method="POST">
				@csrf
					<span class="login100-form-title p-b-26">
						Silahkan Login
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Email tidak valid">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukkan Password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn" >
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="{{asset ('Loginv2/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset ('Loginv2/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset ('Loginv2/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset ('Loginv2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset ('Loginv2/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset ('Loginv2/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset ('Loginv2/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset ('Loginv2/vendor/countdowntime/countdowntime.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="{{asset ('Loginv2/js/main.js')}}"></script>
	<script>
	@if(Session::has('Failed'))
		toastr.error("{{Session::get('Failed')}}", 'Error')
	@endif
	@if(Session::has('Logout'))
		toastr.success("{{Session::get('Logout')}}", 'Sukses')
	@endif
	</script>

</body>
</html>