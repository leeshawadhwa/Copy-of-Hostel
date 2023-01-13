<?php

session_start();

$con = mysqli_connect('localhost', 'root', '','hostel');

// mysqli_select_db($con, 'userregisteration');
$number = $_POST['number'];
$password = $_POST['password'];
$s = " select * from student where number = '$number'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "Already registered!";
}
else{
    $reg = "insert into student(number, password) values ('$number', '$password')";
    mysqli_query($con, $reg);
    mysqli_commit($con);
    echo "Signed Up!";
}
?>