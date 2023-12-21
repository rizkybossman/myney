<?php
require '../controller/connection.php';

session_start();

if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
}

$name = $_POST['name'];
$selectedType = $_POST['types'];
$selectedMethod = $_POST['method'];
$amount = $_POST['amount'];
$notes = $_POST['notes'];
$selectedDate = $_POST['date'];
// $file_name = $_FILES['image']['name'];
// $file_temp = $_FILES['image']['tmp_name'];
$selectedStatus = $_POST['status'];
// $email = $_POST ['email'];

$query_sql = "INSERT INTO datas (email, name, status, types, amount, payment_method, date, notes) 
VALUES ('$email','$name','$selectedStatus','$selectedType', '$amount', '$selectedMethod', '$selectedDate', '$notes')";


if (mysqli_query($conn, $query_sql)) {
    echo '<script>alert("Success inserting data!"); window.location.href = "../overview/overview.php"; </script>';
} else {
    echo '<script>alert("Failed to insert data!"); window.location.href = "input.php";</script>';
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>