<?php
include("layouts/layouts.php");
if ($userInfo['seller'] == 0 ) {
	header('Location: 404');
}
include("models/generate.php");
?>

<!--Main content-->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Generate Token</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 p-3 ">
                               <form action="generate-token" method="post">
							   <?php
							   if ($info['token'] != "") { ?>
								 <div class="alert alert-success" role="alert"><?php echo "Copy token " .$info['token']; ?></div>
								<?php }	?>
                                    <div class="form-group">
										<label for="level">Level</label>
										<select name="level" class="form-control<?php
									    if ($errors['level']!= "") {
											echo "  is-invalid";
										}	?> " id="">
										    <option value="Choose" selected >Choose Level</option>
											<option value="1">Level 1</option>
											<option value="2">Level 2</option>
											<option value="3">Level 3</option>
											<option value="4">Level 4</option>
											<option value="5">Level 5</option>
											<option value="6">Level 6</option>
											<option value="7">Level 7</option>
										</select>
                                        <div class="invalid-feedback"><?php echo $errors['level'] ?></div>
									</div>
									<input type="submit" value="Generate token" name="token" class="btn btn-primary">
					            </form>
                            </div>
							
                            <div class="col-md-6 p-3">
							<form action="generate-token" method="post">
							   <?php
							   if ($info['token'] != "") { ?>
								 <div class="alert alert-success" role="alert"><?php echo "Copy token " .$info['token']; ?></div>
								<?php }	?>
                                    <div class="form-group">
										<label for="userId">User Id</label>
										<input type="text" class="form-control" placeholder="User id to upgrade" name="userId" id="userId">
									<div><br>	
									<input type="submit" value="Upgrade" name="upgrade" class="btn btn-primary">
					            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
