<?php
include("layouts/layouts.php");
include("models/invest-table.php");
?>

<!--Main content-->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Investors</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                            <p class="text-danger" ><?php echo $errors['empty']; ?></p>
                              <div class="table-border-style">
                                <div class="table-responsive">
                                  <table class="table table-inverse">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Amount</th>
                                        <th>Phone Number</th>
                                        <th>Peered to</th>
                                        <th>Peer/Unpeer </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($users)) {?>
                                        <tr>
                                        <td colspan="7" class="text-center">No user to peer yet</td>
                                        </tr>
                                        <?php }else{ ?>
                                        <?php foreach ( $users as $user ) { ?>
                                      <tr>
                                        <td><?php echo $user['id'] ?></td>
                                        <td><?php echo $user['username'] ?></td>
                                        <td><?php echo $user['level']; ?></td>
                                        <td>&#8358;<?php echo number_format($user['amount']) ?></td>
                                        <td><?php echo $user['phone'] ?></td>
                                        <td><?php if (empty( $user['peered_to'])) {?>
                                                    <form action="investment-table?level=<?php echo $user['level']; ?>" id="peer<?php echo $user['username'] ?>" method="post">
                                                      <select name="peeredTo" class="form-control" id="">
                                                            <option value="Choose" selected >Peer with..</option>
                                                            <?php
                                                            $newLevel = $level + 1;
                                                            $sql = "SELECT * FROM withdrawals WHERE level = '$newLevel' ORDER BY id DESC";
                                                            $result = mysqli_query($conn,$sql);
                                                            $withdrawers = mysqli_fetch_all($result,MYSQLI_ASSOC);
                                                            mysqli_free_result($result);

                                                            $sql = "SELECT * FROM users WHERE referrer_id = 'admin'";
                                                            $result = mysqli_query($conn,$sql);
                                                            $admins = mysqli_fetch_all($result,MYSQLI_ASSOC);
                                                            mysqli_free_result($result);?>
                                                            <!--Checking withdrawl table-->
                                                            <?php foreach($withdrawers as $withdrawer){ ?>
                                                            <option value="<?php echo $withdrawer['username'] ?>"><?php echo $withdrawer['username'] ?></option>
                                                            <?php } ?>
                                                            <!--admin peering-->
                                                            <?php foreach($admins as $admin){ ?>
                                                            <option value="<?php echo $admin['username'] ?>"><?php echo $admin['username'] ?>- admin</option>
                                                            <?php } ?>
                                                        </select>
                                                        <input type="hidden" name="username" value="<?php echo $user['username'] ?>">                                                 
                                              <?php }else{
                                                      echo $user['peered_to'];
                                              } ?></td>
                                        <td><?php if (empty( $user['peered_to'])) {?>
                                                      <button type="submit" form="peer<?php echo $user['username'] ?>" name="peer" class="btn btn-primary">Peer</button>
                                                      </form>
                                              <?php }else{?>
                                                      <form action="investment-table?level=<?php echo $user['level']; ?>" method="post">
                                                         <input type="hidden" name="username" value="<?php echo $user['username'] ?>">
                                                         <input type="submit" value="Unpeer" name="unpeer" class="btn btn-primary">
                                                      </form>
                                              <?php } ?> 
                                        </td>
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
