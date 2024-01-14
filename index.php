<?php

$con = mysqli_connect("localhost" ,"root","","shark management" );

$phone = $_POST['phone'];
$user_id = $_POST["user_id"] ; 

mysqli_query($con, "INSERT INTO `phone` (`phone`, `user_id`) VALUES ('$phone','$user_id')");


?>