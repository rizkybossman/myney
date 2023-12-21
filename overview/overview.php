<?php
$getData = include 'overview1.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Myney</title>
    <link rel="stylesheet" href="styles/overview.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
   
    </head>
  <body>
    <nav class="navbar" id="overview">
      <img src="styles/images/logo1.png" alt="" />

      <div class="navbar-nav">
        <a href="overview.php">Overview</a>
        <a href="../input/input.php">Input</a>
        <a href="../landing/index.html">Logout</a>
        
      </div>
    </nav>

    <div class="judul">
      <h1>Your Recent Purchases</h1>
      <p><?php echo isset($email) ? $email : 'Email is not set'; ?></p>
    </div>
    <!-- <div class="sort">
      <select name="" id="sort">
        <option value="sb">Sort By</option>
        <option value="date">2022</option>
        <option value="date">2021</option>
      </select>
    </div> -->

    <div class="tabelUtama">
      <table>
        
          <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Types</th>
            <th>Amount</th>
            <th>Payment Method</th>
            <th>Date</th>
            <th>Notes</th>
            <th>Attachment</th>
          </tr>

          <?php

          include "../controller/connection.php";
          $ambildata = mysqli_query($conn, "SELECT * FROM datas WHERE email = '$email'");
          while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
              <td>$tampil[name]</td>
              <td>$tampil[status]</td>
              <td>$tampil[types]</td>
              <td>$tampil[amount]</td>
              <td>$tampil[payment_method]</td>
              <td>$tampil[date]</td>
              <td>$tampil[notes]</td>
              <td>$tampil[attachment]</td>
            </tr>";
          }
        
        ?>
      </table>
    </div>

    <div class="container">
      <div class="jK1">
        <h1>Your Expense Status is : <span>Normal</span></h1>
        <p>
          (Still on Beta Version) Based on your recent data, we concluded that your expense is
          Normal. <br />
          We know everyone expense is different, but we encourage you to reduces
          your expenses. <br />
          By reducing your expenses you can have some savings for the future to
          come.
        </p>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="grid-container">
          <div class="grid-item-1"></div>
          <div class="grid-item-1">Your Summary Transaction</div>
          <div class="grid-item-1"></div>
    
          <div class="grid-item">Total Transaction</div>
          <div class="grid-item">Income Amount</div>
          <div class="grid-item">Outcome Amount</div>
    
          <div class="grid-item-2"><?php echo $totalData; ?></div>
          <div class="grid-item-2"><?php echo $totalIncome; ?></div>
          <div class="grid-item-11"><?php echo $totalOutcome; ?></div>
      </div>
      </div>
    </div>

    <div class="container2">
      <h1>You Can Export this in form of .pdf</h1>
        <button type="button">Export this reports</button>
      </div>
    </div>

    <footer>
      <div class="links">
        <a href="#overview">Overview</a>
      </div>
      <div class="credit">
        <p><a href="">All Right Reserved | &copy; 2023 myney.com</a></p>
      </div>
    </footer>
  </body>
</html>
