<?php
include("layouts/layouts.php");
include("models/invest.php");
?>
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center p-5">
                    <i class="feather icon-trending-up text-danger d-block f-40"></i>
                        <h4 class="m-t-20">Investment</h4>
                        <?php if (empty($reqInvest)) {?>
                                <p class="text-danger"><?php echo $errors ?></p>
                                <form action="" method="post">
                                <input type="hidden" name="username" value="<?php echo $id ?>" >
                                <button type="submit" name="invest" class="btn btn-danger btn-sm btn-round">Request to be peered</button>
                                </form>
                        <?php }else{ 
                            if ($reqInvest['peered_to'] == "") {?>
                                <p>You have requested to be peered. Check back later within 24hours</p>
                            <?php }else{ 
                                $peerTo = $reqInvest['peered_to'];
                                $sql = "SELECT * FROM bank WHERE username = '$peerTo'";
                                $result = mysqli_query($conn,$sql);
                                $bankDetails = mysqli_fetch_assoc($result);
                                mysqli_free_result($result);?>
                                  <p> <strong>Bank Name</strong>: <?php echo $bankDetails['bank_name'];  ?></p>
                                  <p> <strong>Account Name </strong>: <?php echo $bankDetails['account_name'];  ?></p>
                                  <p> <strong>Account Number</strong>: <?php echo $bankDetails['account_no'];  ?></p>
                                  <p> <strong>Phone number</strong>: <?php echo $reqInvest['perred_Number']; ?></p>
                                  <p> <strong>Amount</strong>: &#8358;<?php echo number_format($reqInvest['amount']); ?></p>
                                  <?php if(empty($reqInvest['payment_status'])){ ?>
                                  <form action="invest" method="post">
                                  <input type="hidden" name="username" value="<?php echo $id ?>" >
                                  <input type="submit" value="Complete" name="complete" class="btn btn-primary btn-sm btn-round">
                                  </form>
                                  <?php }else{ ?>
                                    <p><i>Please call the person you were peered to ,To confirm your payment</i></p>
                                  <?php } ?>
                                   <br>
                                  <p class="text-danger"><i data-feather="info"></i> Please note you are not to send money to any account different from the detailed account below,if this rule
                                  is defiled we will not be liable for any losses concerning the case</p>
                             <?php } ?>
                        <?php } ?>
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
