<?php
session_start();
$id = $_SESSION['id'];
if (empty($id)){
	header('Location: index');
}else{
	include('config/dbconn.php'); 
	$sql = "SELECT * FROM users WHERE username = '$id'";
	$result = mysqli_query($conn,$sql);
	$userInfo = mysqli_fetch_assoc($result);
	$id = $userInfo['username'];
    $earning = $userInfo['earnings'];
	//echo date("y/m/d h:i:sa",strtotime($userInfo['withdrawDate']));
	//checking conditions
	$date = date('y/m/d h:i:sa');
    // echo "<br>".$date;
	if ($date >= date("y/m/d h:i:sa",strtotime($userInfo['withdrawDate'])) ) {
		// echo 'true';
		$eligble = $userInfo['level'] - 2;
		//checking active users
		$sql = "SELECT * FROM users WHERE referrer_id = '$id' AND status = 'Active' AND level > '$eligble' ";
		$result = mysqli_query($conn,$sql);
		$active = mysqli_fetch_all($result,MYSQLI_ASSOC);
		$Count = count($active);
		if ($Count >= 2) {
			//echo "$earning";
			$profit = $userInfo['profit'] + $earning ; 
			$sql = "UPDATE users SET investment = '', profit = '$profit', withdrawDate = '' WHERE username = '$id' ";
			mysqli_query($conn,$sql);
		}
	}else{}
}
?>