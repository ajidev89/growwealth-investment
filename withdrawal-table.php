<?php
include("layouts/layouts.php");
include("models/withdrawal-table.php");
?>

<!--Main content-->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Withdrawls</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                              <div class="table-border-style">
                                <div class="table-responsive">
                                  <table class="table table-inverse">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Phone Number</th>
                                        <th>Amount</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (empty($users)) {?>
                                        <tr>
                                        <td colspan="5" class="text-center">No user to withdrawal yet</td>
                                        </tr>
                                        <?php }else{ ?>
                                        <?php foreach ( $users as $user ) { ?>
                                      <tr>
                                        <td><?php echo $user['id'] ?></td>
                                        <td><?php echo $user['username'] ?></td>
                                        <td><?php echo $user['level'] ?></td>
                                        <td><?php echo $user['phone'] ?></td>
                                        <td>&#8358;<?php echo $user['amount'] ?></td>
                                      </tr>
                                      <?php } ?>
                                      <?php } ?>
                                    </tbody>
                                  </table>

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
