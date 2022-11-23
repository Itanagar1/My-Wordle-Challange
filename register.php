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
//$num = mysqli_num_rows($result);

if (mysqli_num_rows($result) == 1) {
  $result_fetch = mysqli_fetch_assoc($result);
  echo "<script>alert('Username Already Taken');
        window.location.href = 'register.php';
      </script>";
} else {
  $reg = "insert into user(user_name, email, password) values ('$name', '$email', '$pass')";
  mysqli_query($con, $reg);
  echo "<script>alert('Registration Successful');
        window.location.href = 'register.php';
      </script>";
}


?>