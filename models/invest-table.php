<?php
if ($userInfo['referrer_id'] != 'admin') {
    echo "<script type='text/javascript'>document.location.href='404'</script>";
    //header('Location: 404');
}
if (isset($_GET['level'])) {
    $level = $_GET['level'];
}else{

    echo "<script type='text/javascript'>document.location.href='404'</script>";
    //header('Location: 404');
}
$sql = "SELECT * FROM investment WHERE level = '$level' ORDER BY id DESC";
$result = mysqli_query($conn,$sql);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);

$errors = array('empty' => "");
if (isset($_POST['peer'])) {
    $level = $_GET['level'];
    $peeredTo = $_POST['peeredTo'];
    $username = $_POST['username'];
    if ($peeredTo == "Choose") {
        $errors['empty'] = "Peer to field is required";
    }else{
        //Get peeredto Number
        $sql = "SELECT * FROM users WHERE username = '$peeredTo' ";
        $result = mysqli_query($conn,$sql);
        $peerer = mysqli_fetch_assoc($result);
        $peererNumber = $peerer['phone'];
        //echo $peererNumber;
        $sql ="UPDATE investment SET peered_to = '$peeredTo', perred_Number = '$peererNumber' WHERE username = '$username'";
        if (mysqli_query($conn,$sql)) {
            //echo "<script> location.reload(1); </script>";
            //echo $level;
            echo "<script type='text/javascript'>document.location.href='investment-table?level=".$level."'</script>";
            //header('Location: investment-table');
        }
    }
}



if (isset($_POST['unpeer'])) {
    $username = $_POST['username'];
    $sql ="UPDATE investment SET peered_to = '' WHERE username = '$username'";
        if (mysqli_query($conn,$sql)) {
            //echo "<script> location.reload(); </script>";
            echo "<script type='text/javascript'>document.location.href='investment-table?level=".$level."'</script>";
            //header('Location: investment-table');
        }  
}
?>