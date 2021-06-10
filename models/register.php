<?php


$errors = array('empty' => "", 'username' => "" ,'phone' => '', 'referrer' => "", 'password' => '');
$token = $username = $referrer = $phone = $password = "";
  if (isset($_POST['register'])) {
	 $username = $_POST['username'];
	 $referrer = $_POST['referrer'];
	 $phone = $_POST['phone'];
	 $password = $_POST['password'];
	 //validate all fields
	 if (empty($username) || empty($referrer) || empty($phone) || empty($password) ){
		  $errors['empty'] = 'Fill all fields';
	 }else{

     ///Validating username
     $sql = "SELECT * FROM users WHERE username = '$username' ";
     $result = mysqli_query($conn,$sql);
     if (mysqli_num_rows($result) > 0) {
     $errors['username'] = "Username already exist";
     }else{}

    ////validating phone
    if(strlen($phone) == 11){
	      $sql = "SELECT * FROM users WHERE phone = '$phone' ";
		    $result = mysqli_query($conn,$sql);
		    if (mysqli_num_rows($result) > 0) {
        $errors['phone'] = "Phone Number has already been used";
        }else{}
    }else{
      $errors['phone'] = "Invaild Phone Number";
    }

     //vaildate password
    if(strlen($password) < 6){
      $errors['password'] = "Password too short";
    }else {
      $password = md5($password);
    }
	  //Vaildating Refferer
   $sql = "SELECT * FROM users WHERE username = '$referrer' ";
   $result = mysqli_query($conn,$sql);
   if (mysqli_num_rows($result) == 0) {
    $errors['referrer'] = "Referrer does not exist";
   }else{
     //validate level and count of referral
   }
   //Registeration Starts Main Code
 if (array_filter($errors)) {
      //echo "error in form";
  }else{
   $status = "Pending";
	 $username = mysqli_real_escape_string($conn,$username);
	 $referrer = mysqli_real_escape_string($conn,$referrer);
   $phone = mysqli_real_escape_string($conn,$phone);
   $status = mysqli_real_escape_string($conn,$status);
	 $password = mysqli_real_escape_string($conn,$password);
   
   $sql = "INSERT INTO users (username,referrer_id,phone,password,status) VALUES ('$username','$referrer','$phone','$password','$status')";
   if (mysqli_query($conn,$sql)) {
          header('Location: login');
         }else{
        
         }
  }
}
}
if (isset($_GET['refferalid'])) {
    $referrer = $_GET['refferalid'];
}
?>
