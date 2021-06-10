<?php
include("config/sessions.php");
include("models/dashboard.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Growealth</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Growealth" />

    <!-- Favicon icon -->
    <link rel="icon" href="" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
    <!-- font css -->
    <link rel="stylesheet" href="assets/fonts/font-awsome-pro/css/pro.min.css">
    <link rel="stylesheet" href="assets/fonts/feather.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/customizer.css">

</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo text-white mt-1 ">
			<!--<img src="" alt="" class="logo logo-lg">-->
			<p class="m-b-10">Growealth</p>
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<!-- <i data-feather="menu"></i> -->
			</a>
			<a href="logout" class="pc-head-link" id="logout">
				Logout
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pc-sidebar ">
		<div class="navbar-wrapper">
			<div class="m-header">
				<a href="dashboard" class="b-brand text-white">
					<!-- ========   change your logo hear   ============ -->
					<!--<img src="assets/images/logo.svg" alt="" class="logo logo-lg">
					<img src="assets/images/logo-sm.svg" alt="" class="logo logo-sm">-->
					<p class="text-grey">Growealth</p>
				</a>
			</div>
			<div class="navbar-content">
				<ul class="pc-navbar">
					<li class="pc-item pc-caption">
						<label>Navigation</label>

					</li>
					<li class="pc-item">
						<a href="dashboard" class="pc-link ">
							<span class="pc-micon"><i data-feather="home"></i></span>
							<span class="pc-mtext">Dashboard</span>
						</a>
					</li>
					<li class="pc-item">
						<a href="add-bank-account" class="pc-link ">
							<span class="pc-micon"><i data-feather="credit-card"></i></span>
							<span class="pc-mtext">Add Bank account</span>
						</a>
					</li>
					<?php if($userInfo['referrer_id'] == 'admin' ) {?>
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link"><span class="pc-micon"><i data-feather="users"></i></span><span class="pc-mtext">Investment table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="investment-table?level=0">Level 1</a></li>
							<li class="pc-item"><a class="pc-link" href="investment-table?level=1">Level 2</a></li>
							<li class="pc-item"><a class="pc-link" href="investment-table?level=2">Level 3</a></li>
							<li class="pc-item"><a class="pc-link" href="investment-table?level=3">Level 4</a></li>
							<li class="pc-item"><a class="pc-link" href="investment-table?level=4">Level 5</a></li>
							<li class="pc-item"><a class="pc-link" href="investment-table?level=5">Level 6</a></li>
							<li class="pc-item"><a class="pc-link" href="investment-table?level=6">Level 7</a></li>
						</ul>
					</li>
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link"><span class="pc-micon"><i data-feather="users"></i></span><span class="pc-mtext">Withdrawal table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="withdrawal-table?level=1">Level 1</a></li>
							<li class="pc-item"><a class="pc-link" href="withdrawal-table?level=2">Level 2</a></li>
							<li class="pc-item"><a class="pc-link" href="withdrawal-table?level=3">Level 3</a></li>
							<li class="pc-item"><a class="pc-link" href="withdrawal-table?level=4">Level 4</a></li>
							<li class="pc-item"><a class="pc-link" href="withdrawal-table?level=5">Level 5</a></li>
							<li class="pc-item"><a class="pc-link" href="withdrawal-table?level=6">Level 6</a></li>
							<li class="pc-item"><a class="pc-link" href="withdrawal-table?level=7">Level 7</a></li>
						</ul>
					</li>
					<li class="pc-item">
						<a href="suspend-account" class="pc-link ">
							<span class="pc-micon"><i data-feather="user-x"></i></span>
							<span class="pc-mtext">Suspend Account</span>
						</a>
					</li>
					<?php } ?>
					<li class="pc-item">
						<a href="invest" class="pc-link ">
							<span class="pc-micon"><i data-feather="trending-up"></i></span>
							<span class="pc-mtext">Invest</span>
						</a>
					</li>
					<li class="pc-item">
						<a href="withdrawal" class="pc-link ">
							<span class="pc-micon"><i data-feather="credit-card"></i></span>
							<span class="pc-mtext">Withdraw</span>
						</a>
					</li>
					<li class="pc-item">
						<a href="transactions" class="pc-link ">
							<span class="pc-micon"><i data-feather="folder"></i></span>
							<span class="pc-mtext">Transactions</span>
						</a>
					</li>
					<li class="pc-item">
						<a href="logout" class="pc-link ">
							<span class="pc-micon"><i data-feather="log-out"></i></span>
							<span class="pc-mtext">Logout</span>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header ">
		<div class="header-wrapper">
			<div class="mr-auto pc-mob-drp">
				<ul class="list-unstyled">
					<li class="dropdown pc-h-item pc-mega-menu">
						<div class="page-header-title">
							<h5 class="m-b-10">Welcome <?php echo $userInfo['username'];?> - <?php echo $userInfo['status'];?>,</h5>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
   
    