<?php
require '../controller/connection.php';
$firstname = $_POST['firstname'];
$lastname = $_POST  ['lastname'];
$email = $_POST ['email'];
$password = $_POST ['password'];

$query_sql = "INSERT INTO users (first_name, last_name, email, password) 
VALUES ('$firstname','$lastname','$email','$password')";

$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

if (mysqli_num_rows($result) > 0) {
  echo '<script>alert("Email already exists!"); window.location.href = "register.html";</script>';
} else {
  if (mysqli_query($conn, $query_sql)) {
      echo '<script>alert("Registration successful!"); window.location.href = "../login/login.html";</script>';
  } else {
      echo "Error: " . mysqli_error($conn);
  }
}

mysqli_close($conn);