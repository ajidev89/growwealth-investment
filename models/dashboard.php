<?php
  $sql = "SELECT * FROM users WHERE referrer_id = '$id'";
  $result = mysqli_query($conn,$sql);
  $referrals = mysqli_fetch_all($result,MYSQLI_ASSOC);
  $count = count($referrals);
?>