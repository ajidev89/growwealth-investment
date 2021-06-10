<?php
 $errors = array('level' => "");
 $info = array('token' => "");
 if (isset($_POST['token'])) {
     $level = $_POST['level'];
     // Validating level
     if ($level == 'Choose') {
         $errors['level'] = "Level field is required";
     }else{
         if ($level == "1") {
             $earnings = "3000";
             $investment = "1500";
             $addDate = date_add($date, date_interval_create_from_date_string("2 days"));
         }elseif ($level == "2") {
             $earnings = "5000";
             $investment = "2500";
             $addDate = date_add($date, date_interval_create_from_date_string("2 days"));
         }elseif ($level == "3") {
             $earnings = "1000";
             $investment = "5000";
             $addDate = date_add($date, date_interval_create_from_date_string("4 days"));
         }elseif ($level == "4") {
             $earnings = "16000";
             $investment = "8000";
             $addDate = date_add($date, date_interval_create_from_date_string("4 days"));
         }elseif ($level == "5") {
             $earnings = "32000";
             $investment = "16000";
             $addDate = date_add($date, date_interval_create_from_date_string("6 days"));
         }elseif ($level == "6") {
             $earnings = "56000";
             $investment = "32000";
             $addDate = date_add($date, date_interval_create_from_date_string("6 days"));
         }elseif ($level == "7") {
             $earnings = "11200";
             $investment = "56000";
             $addDate = date_add($date, date_interval_create_from_date_string("8 days"));
         }
         $token = substr(md5(time()),0,6);
         $sql = "INSERT INTO users(token,level,investment,earnings) VALUES('$token','$level',$investment,$earnings)";
         if (mysqli_query($conn,$sql)) {
               $info['token'] = $token;
              }else{
                  $info['token'] = "Not avaliable";
              }
     }
 }else{}

 if (isset($_POST['upgrade'])) {
     $id = $_POST['userId'];
     
 }
?>