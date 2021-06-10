<?php
include("config/dbconn.php");
include("models/register.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Register | Growealth </title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Growealth" />

	<!-- Favicon icon -->
	<!--<link rel="icon" href="" type="image/x-icon">-->

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
?>
<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<!--<img src="" alt="" class="img-fluid mb-4">-->
						<h4 class="mb-3 f-w-400">Register</h4>
					  <p class="text-danger" ><?php echo $errors['empty'] . $errors['phone'] . $errors['referrer'] . $errors['password']; ?></p>
            <form action="register" method="post">
						<div class="input-group mb-3">
    							<div class="input-group-prepend">
    								  <span class="input-group-text"><i data-feather="user"></i></span>
    							</div>
    							<input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" class="form-control" placeholder="Username">
             </div>
              <div class="input-group mb-3">
    							<div class="input-group-prepend">
    								<span class="input-group-text"><i data-feather="user"></i></span>
    							</div>
    							<input type="text" name="referrer" value="<?php echo htmlspecialchars($referrer); ?>" class="form-control" placeholder="Referrer ID">
              </div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
  								<span class="input-group-text"><i data-feather="phone-call"></i></span>
  							</div>
  							<input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>"  class="form-control" placeholder="Phone number">
						</div>
						<div class="input-group mb-4">
							<div class="input-group-prepend">
								<span class="input-group-text"><i data-feather="lock"></i></span>
							</div>
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
                        <input type="submit" name="register" class="btn btn-primary btn-block mb-4" value="Register">
                    </form>
						<p class="mb-2">Already have an account? <a href="/PonziScheme" class="f-w-400">Signin</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
</body>
</html>
