<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Growealth</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />

	<!-- Favicon icon -->
	<link rel="icon" href="" type="">

	<!-- font css -->
	<link rel="stylesheet" href="assets/fonts/font-awsome-pro/css/pro.min.css">
	<link rel="stylesheet" href="assets/fonts/feather.css">
	<link rel="stylesheet" href="assets/fonts/fontawesome.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/customizer.css">



</head>
<?php
session_start();
if (isset($_SESSION['id'])){
   header('Location: dashboard');
}
 include("models/login.php");
?>
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<!--<img src="" alt="" class="img-fluid mb-4">-->
						<h4 class="mb-3 f-w-400">Login</h4>
						<p class="text-danger"><?php echo $errors['phone'].$errors['invaild']; ?></p>
						<form action="login" method="post">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i data-feather="user"></i></span>
							</div>
							<input type="text" id="username" name="username" value="<?php echo $username ?>" class="form-control" placeholder="Username">
						</div>
						<div class="input-group mb-4">
							<div class="input-group-prepend">
								<span class="input-group-text"><i data-feather="lock"></i></span>
							</div>
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
						<div class="form-group text-left mt-2">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input input-primary" id="customCheckdefh2" checked="">
								<label class="custom-control-label" for="customCheckdefh2">Save credentials</label>
							</div>
						</div>
						<input type="submit"  class="btn btn-block btn-primary mb-4" name="login" value="Login">
                        </form>
						<p class="mb-2 text-muted">Forgot password? <a href="reset-password" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Don’t have an account? <a href="register" class="f-w-400">Signup</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
</body>
<html>
