<?php
include("layouts/layouts.php");
include("models/withdrawal.php");
?>
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body text-center p-5">
                    <i class="feather icon-credit-card text-primary d-block f-40"></i>
                        <h4 class="m-t-20">Withdrawls</h4>
                        <?php if (array_filter($PeeredWiths)) {?>
                                <?php foreach($PeeredWiths as $PeeredWith){ ?>
                                     <p>Username - <?php echo $PeeredWith['username']; ?></p>
                                     <p>Account name - <?php
                                     //Getting Account Name for peerd with
                                        $getName = $PeeredWith['username']; 
                                        $sql = "SELECT * FROM bank WHERE username = '$getName' ";
                                        $result = mysqli_query($conn,$sql);
                                        $Account = mysqli_fetch_assoc($result);
                                        echo $Account['account_name'] ?></p>
                                     <p>Phone Number - <?php echo $PeeredWith['phone']; ?></p>
                                     <form action="" method="post">
                                     <input type="hidden" name="username" value="<?php echo $PeeredWith['username']; ?>" >
                                     <input type="hidden" name="amount" value="<?php echo $PeeredWith['amount']; ?>" >
                                     <button type="submit" name="confirm" class="btn btn-primary btn-sm btn-round" >Confirm</button>
                                     </form>
                                <?php } ?>
                        <?php }else{ ?>
                                    <?php if (empty($userInfo['profit'])) {?>
                                        <p><i>Please you are not yet eligible to request for withdrawal</i></p>
                                    <?php }else{ ?>   
                                         <?php if (empty($reqWithdrawal)) { ?> 
                                            <form action="" method="post">
                                            <input type="hidden" name="username" value="<?php echo $id ?>" >
                                            <button type="submit" name="withdrawl" class="btn btn-primary btn-sm btn-round">Request Withdrawls</button>
                                            </form>
                                         <?php }else{ ?>
                                            <p><i>You have requested a withdrawal. Check back later within 24hours</i></p>
                                         <?php } ?>
                                    <?php } ?>
                              
                          
                        <?php } ?>
                        <br>
                        <p class="text-danger"><i data-feather="info"></i> Make sure you have recieved your earnings before confirming the transactions</p>
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
