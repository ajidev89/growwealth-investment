<?php 
include("layouts/layouts.php");
include("models/dashboard.php");

?>

<!--Main content-->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
			<!-- visitors  start -->
			<div class="col-sm-3">
                <div class="card bg-primary text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white"><?php echo $userInfo['level'] ?></h2>
                        <h6 class="text-white">Level</h6>
                        <i class="feather icon-align-justify"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-info text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white"><?php echo $count ?></h2>
                        <h6 class="text-white">Referrals</h6>
                        <i class="feather icon-user-plus"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-success text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">&#8358;<?php echo number_format($userInfo['investment']) ?></h2>
                        <h6 class="text-white">Investment</h6>
                        <i class="feather icon-credit-card"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-warning text-white widget-visitor-card">
                    <div class="card-body text-center">
                        <h2 class="text-white">&#8358;<?php echo number_format($userInfo['profit']) ?></h2>
                        <h6 class="text-white">Expected Profit</h6>
                        <i class="feather icon-credit-card"></i>
                    </div>
                </div>
			</div>
		</div>	
		<div class="card">
				<div class="card-header">
					<h5 class="m-b-10" >Referrals</h5>
					<span class="d-block m-t-5">Share your refferal link</span>
					<span class="i-block" data-clipboard-text="alert-triangle" data-filter="Copy link" data-toggle="tooltip" title="" data-original-title="Copy link">https://growealth.com.ng/register?refferalid=<?php echo $userInfo['username'] ?></span>
				</div>
				<div class="card-body table-border-style">
					<div class="table-responsive">
						<table class="table table-inverse">
							<thead>
								<tr>
									<th>Name</th>
                                    <th>Level</th>
									<th>Phone Number</th>
									<th>Refferal link</th>
								</tr>
							</thead>
							<tbody>
                                <?php if (empty($referrals)) {?>
                                    <tr>
                                    <td colspan="4" class="text-center">No refferals yet</td>
                                    </tr>
                               <?php }else{ ?>
                                        <?php foreach( $referrals as $referral ){ ?>
                                        <tr>
                                            <td><?php echo $referral['username']; ?></td>
                                            <td>Level <?php echo $referral['level']; ?></td>
                                            <td><?php echo $referral['phone']; ?></td>
                                            <td><span class="i-block" data-clipboard-text="alert-triangle" data-filter="Copy link" data-toggle="tooltip" title="" data-original-title="Copy link">https://growealth.com.ng/register?refferalid=<?php echo $referral['username']; ?></span></td>
                                        </tr>
                                        <?php } 
                                        }?>
							</tbody>
						</table>
						<!--<div class="text-center">
							<button class="btn btn-primary">Request for payment</button>
						</div>-->
					</div>
				</div>
			</div>

    
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="assets/js/plugins/clipboard.min.js"></script>
    <script src="assets/js/uikit.min.js"></script>

<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<script src="assets/js/pages/todo.js"></script>
<!--Copy board-->
<script src="assets/js/plugins/clipboard.min.js"></script>
</body>
</html>
