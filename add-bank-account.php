<?php
include("layouts/layouts.php");
include("models/addbank.php");
?>
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Bank details</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                 <p class="text-success"><?php echo $sucess  ?></p>
                                 <form action="add-bank-account" method="post">
                                    <div class="form-group">
                                        <label for="bankName">Bank Name</label>
                                        <input type="text" class="form-control" value="<?php
                                        if (!empty($bankInfo)) {
                                         echo $bankInfo['bank_name'];
                                        }
                                         ?>" name="bankName" id="bankName" placeholder="Enter bank name">
                                    </div>
                                    <div class="form-group">
                                        <label for="accountName">Bank Account Name</label>
                                        <input type="text" class="form-control" name="accountName" value="<?php
                                        if (!empty($bankInfo)) {
                                           echo $bankInfo['account_name'];
                                         }?>" id="accountName" placeholder="Enter bank account name">
                                    </div>
                                    <div class="form-group">
                                        <label for="accountNmber">Bank Account Number</label>
                                        <input type="text" class="form-control" name="accountNumber" value="<?php
                                        if (!empty($bankInfo)) {
                                          echo $bankInfo['account_no'];} ?>" id="accountNumber" placeholder="Enter bank account number">
                                    </div>
                                    <input type="hidden" name="username" value="<?php echo $id ?>" >
                                    <button type="submit" name="addBank" class="btn btn-primary">
                                      <?php if (!empty($bankInfo)) {
                                        echo "Update bank details";
                                      }else {
                                        echo "Add bank details";
                                      }?>
                                      </button>
                                </form>
                                <br>
                                <p class="text-danger"> <i data-feather="info"></i> Enter correct bank details so you can receive earnings</p>
                            </div>
                            <div class="col-md-6">

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
