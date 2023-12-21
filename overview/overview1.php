<?php
session_start();

if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];

  include "../controller/connection.php";

  $result = mysqli_query($conn, "SELECT COUNT(*) AS totalData FROM datas WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
  $totalData = $row['totalData'];

  $resultIncome = mysqli_query($conn, "SELECT SUM(amount) AS totalIncome FROM datas WHERE email = '$email' AND status = 'Income'");
  $rowIncome = mysqli_fetch_assoc($resultIncome);
  $totalIncome = $rowIncome['totalIncome'];

  $resultOutcome = mysqli_query($conn, "SELECT SUM(amount) AS totalOutcome FROM datas WHERE email = '$email' AND status = 'Outcome'");
  $rowOutcome = mysqli_fetch_assoc($resultOutcome);
  $totalOutcome = $rowOutcome['totalOutcome'];
} else {
  
  $totalData = 0; 
  $totalIncome = 0; 
  $totalOutcome = 0; 
}
?>
