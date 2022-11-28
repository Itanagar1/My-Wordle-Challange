<?php
# storing in variable con
$con = mysqli_connect("localhost", "root", "", "testing");

if (mysqli_connect_errno()) {
  echo "<script>alert('Failed to connect');</script>";
  exit();
}
?>