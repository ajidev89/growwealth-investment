<?php
$username = "";
$errors= array('phone' => "", 'password'=> "",'invaild'=> "" );
if (isset($_POST['login'])) {
    include('config/dbconn.php'); 
    //checking fields
    if(empty($_POST['username']) || empty($_POST['password']) ){
        $errors['invaild'] = "Username or password field is required";
    }else{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = md5('$password')";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
        if($count == 1) {
        $id  = $check['username'];
        session_start();
        $_SESSION['id'] = $id;
        header("location: dashboard");
        }else{
            $errors['invaild'] ="Invaild login details ";
        }
    }
}



?>