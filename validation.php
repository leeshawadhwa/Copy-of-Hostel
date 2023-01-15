<?php

session_start();

$con = mysqli_connect('localhost', 'root', '','hostel');


// mysqli_select_db($con, 'registrations');
$number = $_POST['number'];

$password = $_POST['password'];
$s = " select * from student where number = '$number' && password = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    // mysqli_commit($con);
    header('location:payment.html');
}else{
    header('location:login.html');
}
?>