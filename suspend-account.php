<?php
include("layouts/layouts.php");
include("models/suspend.php");
?>

<!--Main content-->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Suspend Accounts</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 p-3 ">
                               <form action="suspend-account" method="post">
                                    <div class="form-group">
										<label for="level">Username</label>
										<select name="level" class="form-control" id="">
										    <option value="Choose" selected >Choose user</option>
                                            <?php foreach($users as $user){ ?>
											<option value="<?php echo $user['username'] ?>"><?php echo $user['username'] ?></option>
                                            <?php } ?>
										</select>
                                        <div class="invalid-feedback"><?php echo $errors['level'] ?></div>
									</div>
									<input type="submit" value="Suspend account" name="suspend" class="btn btn-primary">
					            </form>
                            </div>
							
                            <div class="col-md-6 p-3">
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
