<?php
$errors ="";
   if (isset($_POST['invest'])) {
       //Check if bank details
       $id = $_POST['username'];
       $phone = $userInfo['phone'];
       $level = $userInfo['level'];
       $msg = "I ". $id ." requesting to peered so i can invest or upgrade my level ". $level ;
       if ($level == 0) {
        $amount = 1500;
       }elseif ($level == 1) {
        $amount = 2500;
       }elseif ($level == 2) {
        $amount = 5000;
       }elseif ($level == 3) {
        $amount = 8000;
       }elseif ($level == 4) {
        $amount = 16000;
       }elseif ($level == 5) {
        $amount = 32000;
       }elseif ($level == 6) {
        $amount = 52000;
       }else{
        $errors = "You are finished all level";
       }
       if($errors == ""){
        //Insert to investment table
        $sql = "INSERT INTO investment (username,level,phone,amount,message) VALUES ('$id','$level','$phone','$amount','$msg')";
        if (mysqli_query($conn,$sql)) {
            echo "<script type='text/javascript'>document.location.href='invest';</script>";
            }else{}
      }else{}
   }else{}

    ///Checking if peered 
    $sql = "SELECT * FROM investment WHERE username = '$id' ";
    $result = mysqli_query($conn,$sql);
    $reqInvest = mysqli_fetch_assoc($result);

    //Complete
    if (isset($_POST['complete'])) {
        $username = $_POST['username'];
        $payStatus = "pending";
        $sql ="UPDATE investment SET payment_status = '$payStatus' WHERE username = '$username'";
        if (mysqli_query($conn,$sql)) {
            echo "<script type='text/javascript'>document.location.href='invest';</script>";
            // header('Location: invest');
        }
    }
    
?>