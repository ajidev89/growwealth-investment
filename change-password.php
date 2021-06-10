<!DOCTYPE html>
<html lang="en">
<head>

	<title>Change password | Growwealth </title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Growealth" />

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
  if (!empty($_SESSION['reset'])) {
	echo $_SESSION['reset'];
  }else{
    echo "No session";
	//header("location: reset-password");
  }

?>
<div class="auth-wrapper">
	<div class="blur-bg-images"></div>
	<!-- [ change-password ] start -->
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center">
				<div class="col-md-12">
					<div class="card-body">
						<div class="text-center">
							<h4 class="mb-4 f-w-400">Change your password</h4>
						</div>
						<div class="input-group mb-2">
							<input type="password" class="form-control" placeholder="New Password">
						</div>
						<div class="input-group mb-4">
							<input type="password" class="form-control" placeholder="Re-Type New Password">
						</div>
						<button class="btn btn-block btn-primary mb-4">Change password</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ change-password ] end -->
</div>

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
</body>
</html>
