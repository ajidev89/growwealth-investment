<?php
if ($userInfo['referrer_id'] != 'admin') {
    echo "<script type='text/javascript'>document.location.href='404'</script>";
}
if (isset($_GET['level'])) {
    $level = $_GET['level'];
}else{
    echo "<script type='text/javascript'>document.location.href='404'</script>";
   //header('Location: 404');
}
$sql = "SELECT * FROM withdrawals WHERE level = '$level' ORDER BY id DESC";
$result = mysqli_query($conn,$sql);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);


?>