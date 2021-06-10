<?php
include("layouts/layouts.php");
$sql = "SELECT * FROM transactions WHERE from_id = '$id' OR to_id = '$id' ";
$result = mysqli_query($conn,$sql);
$transactions = mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($transactions);
mysqli_free_result($result);
?>

<!--Main content-->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
              <div class="card feed-card">
                  <div class="card-header">
                      <h5>Transactions</h5>
                  </div>
                  <div class="feed-scroll" style="position:relative;">
                      <div class="card-body">
                        <?php foreach ($transactions as $transaction) {?>
                          <div class="row m-b-25 align-items-center">
                              <div class="col-auto p-r-0">
                                  <i data-feather="bell" class="badge-light-primary feed-icon"></i>
                              </div>
                              <div class="col">
                                  <a href="#!">
                                    <?php if ($transaction['to_id'] != $id ) {?>
                                      <h6 class="m-b-5">You have invested &#8358;<?php echo number_format($transaction['amount']); ?>. <span class="text-muted float-right f-14"><?php echo date('F j, Y g:i a',strtotime($transaction['created_at'])); ?></span></h6>
                                    <?php }else{ ?>
                                      <h6 class="m-b-5">You have withdrawled &#8358;<?php echo number_format($transaction['amount']); ?>. <span class="text-muted float-right f-14"><?php echo date('F j, Y g:i a',strtotime($transaction['created_at'])); ?></span></h6>
                                    <?php } ?>
                                  </a>
                              </div>
                          </div>
                        <?php } ?>
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
