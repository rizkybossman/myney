<?php
require '../controller/connection.php';

$password = $_POST["password"];
session_start();

if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
}

$query_sql = "UPDATE users SET password = '$password' WHERE email = '$email'";

$result = mysqli_query($conn, $query_sql);

if ($result) {
  echo '<script>alert("Success to update password");window.location.href = "../login/login.html";</script>';
} else {
  echo '<script>alert("Failed to update password");window.location.href = "check.html";</script>';
}