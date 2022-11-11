<?php
session_start();

$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "userregistration");

$name = $_POST['user_name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from user where email = '$email' OR user_name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
  header('location:home.php');
} else {
  header('location:Signup.php');
}


?>