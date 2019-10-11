<?php $con = mysqli_connect("191.101.50.220","spultzry_to-do","guesswh@t!","spultzry_to-do");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 
date_default_timezone_set('Asia/Karachi');
$error="";

?>