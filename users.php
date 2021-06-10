<?php
include("layouts/layouts.php");
if ($userInfo['seller'] == 0 ) {
	header('Location: 404');
}
$sql = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($conn,$sql);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
?>

<!--Main content-->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Users</h5>
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
                                        <th>Token</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Referrer ID</th>
                                        <th>Refferal ID</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ( $users as $user ) { ?>
                                      <tr>
                                        <td><?php echo $user['id'] ?></td>
                                        <td><?php echo $user['token'] ?></td>
                                        <td><?php echo $user['username'] ?></td>
                                        <td><?php echo $user['level'] ?></td>
                                        <td><?php echo $user['referrer_id'] ?></td>
                                        <td><?php echo $user['user_id'] ?></td>
                                      </tr>
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
