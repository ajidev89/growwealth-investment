<!DOCTYPE html>
<html lang="en">
<head>

	<title>Reset password | Growealth</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />

	<!-- Favicon icon -->
	<link rel="icon" href="" type="image/x-icon">

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
}else{}
$errors = array('empty' => "",'invaild' => '');
if (isset($_POST['reset'])) {
	$username = $_POST['username'];
	if (empty($username)){
		$errors['empty'] = 'Username is required';
   }else{
	    include("config/dbconn.php");
		///Validating username
		$sql = "SELECT * FROM users WHERE username = '$username' ";
		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result) > 0) {
			session_start();
			$_SESSION['reset'] = $username;
			header("location: change-password");
		}else{
			$errors['invaild'] = "Username does not exist";
		}
   }	
}
?>
<div class="auth-wrapper">
	<!-- [ reset-password ] start -->
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<!--<img src="assets/images/logo-dark.svg" alt="" class="img-fluid mb-4">-->
						<h4 class="mb-3 f-w-400">Reset your password</h4>
						<p class="text-danger" ><?php echo $errors['empty'] . $errors['invaild']; ?></p>
						<form action="reset-password" method="post">
						<div class="input-group mb-4">
							<div class="input-group-prepend">
								<span class="input-group-text"><i data-feather="user"></i></span>
							</div>
							<input type="text" name="username" class="form-control" placeholder="Username">
						</div>
						<input type="submit"  class="btn btn-block btn-primary mb-4" name="reset" value="Reset password">
						</form>
						<p class="mb-0 text-muted">Don’t have an account? <a href="register" class="f-w-400">Signup</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ reset-password ] end -->
</div>

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
</body>
</html>
