<?php
require '../controller/connection.php';
$email = $_POST["email"];

session_start();
$_SESSION['email'] = $email;

$query_sql = "SELECT * FROM users WHERE email = '$email'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0){
  echo '<script>alert("Email Found"); window.location.href = "change.html";</script>'; 
} else {
  echo '<script>alert("Email Not Found");window.location.href = "check.html";</script>';
}