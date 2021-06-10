<?php

    //Checking Investmet
    $sql = "SELECT * FROM investment WHERE peered_to = '$id' ";
    $result = mysqli_query($conn,$sql);
    $PeeredWiths = mysqli_fetch_all($result,MYSQLI_ASSOC);

////Confirm payments and upgrading users
    if (isset($_POST['confirm'])) {
      $peeredWith = $_POST['username'];
      $amountSent = $_POST['amount'];
      $sql = "SELECT * FROM users WHERE username = '$peeredWith' ";
      $result = mysqli_query($conn,$sql);
      $user = mysqli_fetch_assoc($result);
       $status = "Active";
      $level = $user['level'] + 1;
      $date = 1 ;
      if ($level == "1") {
        $earnings = "3000";
        $investment = "1500";
        $addDate = date('y/m/d h:i:sa', strtotime('+ 2 days'));
      }elseif ($level == "2") {
        $earnings = "5000";
        $investment = "2500";
        $addDate = date('y/m/d h:i:sa', strtotime('+ 2 days'));
     }elseif ($level == "3") {
        $earnings = "1000";
        $investment = "5000";
        $addDate = date('y/m/d h:i:sa', strtotime('+ 4 days'));
     }elseif ($level == "4") {
        $earnings = "16000";
        $investment = "8000";
        $addDate = date('y/m/d h:i:sa', strtotime('+ 4 days'));
     }elseif ($level == "5") {
        $earnings = "32000";
        $investment = "16000";
        $addDate = date('y/m/d h:i:sa', strtotime('+ 6 days'));
     }elseif ($level == "6") {
        $earnings = "56000";
        $investment = "32000";
        $addDate = date('y/m/d h:i:sa', strtotime('+ 6 days'));
     }elseif ($level == "7"){
        $earnings = "11200";
        $investment = "56000";
        $addDate = date('y/m/d h:i:sa', strtotime('+ 8 days'));
    }
    $sql ="UPDATE users SET level = '$level', status = '$status' , investment = '$investment', earnings = '$earnings' , withdrawDate = '$addDate' WHERE username = '$peeredWith'";
    if (mysqli_query($conn,$sql)) {
         $sql ="INSERT INTO transactions (`from_id`, `to_id`, `amount`) VALUES ('$peeredWith','$id', '$amountSent')";
         if (mysqli_query($conn,$sql)) {
               $sql = "DELETE FROM investment WHERE username = '$peeredWith' ";
               if (mysqli_query($conn,$sql)) {
                  echo "<script type='text/javascript'>document.location.href='withdrawal'</script>";
               }
         }
    }  
}


//Sending request to withdrawal
     if (isset($_POST['withdrawl'])) {
      $level = $userInfo['level'];
      $phone = $userInfo['phone'];
      $amount = $userInfo['profit'];
      $sql = "INSERT INTO withdrawals (`level`, `username`, `phone`,`amount`) VALUES ('$level','$id','$phone','$amount') ";
      if (mysqli_query($conn,$sql)) {
         echo "<script type='text/javascript'>document.location.href='withdrawal'</script>";
         header('Location: withdrawal');
      }
     }
//Checking of withdrawAL; 
    $sql = "SELECT * FROM withdrawals WHERE 	username = '$id' ";
    $result = mysqli_query($conn,$sql);
    $reqWithdrawal = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>