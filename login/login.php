<?php
require '../controller/connection.php';

$email = $_POST["email"];
$password = $_POST["password"];

session_start();
$_SESSION['email'] = $email;

$query_sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
  $user_data = mysqli_fetch_assoc($result);
  if ($password === $user_data['password']) {
    echo '<script>alert("Login successful!"); setTimeout(function(){ window.location.href = "../overview/overview.php"; }, 500);</script>';
  } else {
    echo '<script>alert("Password is incorrect"); window.location.href = "login.html";</script>';
  }
} else {
  echo '<script>alert("Email is incorrect or does not exist"); window.location.href = "login.html";</script>';
}

mysqli_close($conn);
?>
