<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Astrik Hrm | Login</title>


	<?php include 'includes/style.php'; ?>

</head>

<body>


<!-- Main Wrapper -->
<div class="main-wrapper">

    
    <div class="container-fuild">
			<div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
				<div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
					<div class="col-md-4 mx-auto ">
						<form action="index.php" class="">
							<div class="py-0 d-flex flex-column justify-content-between p-4 pb-0">
								<div class=" mx-auto mb-0 mt-5 text-center">
									<img src="assets/img/logo-large.png"
										class="img-fluid mb-5" alt="Logo">
								</div>
								<div class="">
									<div class="text-center mb-3">
										<h2 class="mb-2">Sign In</h2>
										<p class="mb-0">Please enter your details to sign in</p>
									</div>
									<div class="mb-3">
										<label class="form-label">User Name</label>
										<div class="input-group">
											<input type="text" value="" class="form-control border-end-0">
											<span class="input-group-text border-start-0">
												<i class="ti ti-mail"></i>
											</span>
										</div>
									</div>
									<div class="mb-3">
										<label class="form-label">Password</label>
										<div class="pass-group">
											<input type="password" class="pass-input form-control">
											<span class="ti toggle-password ti-eye-off"></span>
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-3">
										<div class="d-flex align-items-center">
											<div class="form-check form-check-md mb-0">
												<input class="form-check-input" id="remember_me" type="checkbox">
												<label for="remember_me" class="form-check-label mt-0">Remember Me</label>
											</div>
										</div>
										<div class="text-end">
											<a href="forgot-password.php" class="link-danger">Forgot Password</a>
										</div>
									</div>
									<div class="mb-3">
										<button type="submit" class="btn btn-primary w-100">Sign In</button>
									</div>
									<!-- <div class="text-center">
										<h6 class="fw-normal text-dark mb-0">Don’t have an account? 
											<a href="register.php" class="hover-a"> Create Account</a>
										</h6>
									</div>
									<div class="login-or">
										<span class="span-or">Or</span>
									</div> -->
									
								</div>
								<div class="mt-5 pb-4 text-center">
									<p class="mb-0 text-gray-9">Copyright &copy; 2025 - Astrikdigital</p>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>


</div>
<!-- /Main Wrapper -->


	<?php include 'includes/script.php'; ?>

</body>

</html>