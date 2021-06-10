<?php
   $sucess = "";
   //find in database
	$sql = "SELECT * FROM bank WHERE username = '$id'";
	$result = mysqli_query($conn,$sql);
    $bankInfo = mysqli_fetch_assoc($result);
    //print_r($bankInfo);
if (isset($_POST['addBank'])) {
    //assign values
    $bankName = $_POST['bankName'];
    $accountName = $_POST['accountName'];
    $accountNumber = $_POST['accountNumber'];
    $id = $_POST['username'];

    //escape string
    $bankName = mysqli_real_escape_string($conn,$bankName);
    $accountName = mysqli_real_escape_string($conn,$accountName);
    $accountNumber = mysqli_real_escape_string($conn,$accountNumber);
    $id = mysqli_real_escape_string($conn,$id);
    
    //check
    if (empty($bankInfo)) {
        $sql ="INSERT INTO bank (`username`, `bank_name`, `account_name`, `account_no`) VALUES ('$id','$bankName', '$accountName', '$accountNumber')";
        if (mysqli_query($conn,$sql)) {
              $sucess = 'Successfully added bank details';
              echo "<script type='text/javascript'>document.location.href='add-bank-account';</script>";
              //header('Location: add-bank-account');
              //echo "<script> location.reload(); </script>";
            }else{
            }
    }else{
        $sql = "UPDATE bank SET bank_name = '$bankName', account_name = '$accountName',account_no = '$accountNumber' WHERE username = '$id'";
        if (mysqli_query($conn,$sql)) {
               $sucess = 'Successfully edited bank details';
               echo "<script type='text/javascript'>document.location.href='add-bank-account';</script>";
               //header_remove('add-bank-account');
              }else{
              }

    }



}

?>
