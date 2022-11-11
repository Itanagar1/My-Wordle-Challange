<?php
session_start();

header('location:Signup.php');

$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "userregistration");

$name = $_POST['user_name'];
$email = $_POST['email'];
$pass = $_POST['password'];


$s = "select * from user where user_name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
  echo "Username Already Taken";
} else {
  $reg = "insert into user(user_name, email, password) values ('$name', '$email', '$pass')";
  mysqli_query($con, $reg);
  echo "Registration Successful";
}


?>