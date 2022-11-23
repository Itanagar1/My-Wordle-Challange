<?php
session_start();

$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "userregistration");

$name = $_POST['user_name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from user where email = '$email' AND password = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {


  header('location:home.php');
  echo "<script>alert('Registration Successful');
        window.location.href = 'register.php';
      </script>";
} else {
  header('location:Signup.php');
  echo "<script>alert('Invalid');
        window.location.href = 'register.php';
      </script>";
      
}


?>