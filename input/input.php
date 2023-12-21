<?php
session_start();

if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Input Purchase</title>
    <link rel="stylesheet" href="styles/input.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

   <body>
    <nav class="navbar" id="overview">
      <img src="styles/images/logo1.png" alt="" />
      <div class="navbar-nav">
        <a href="../overview/overview.php">Overview</a>
        <a href="input.php">Input</a>
        <a href="../landing/index.html">Logout</a>
      </div>
    </nav>

  <div class="container">
    <div class="judul">
      <h1>You can input your data here</h1>
      <p><?php echo isset($email) ? $email : 'Email is not set';  ?> </p>
      
    </div>
    <div class="content" >
      <form action="input2.php" method="post">
        <div class="item-details">

          <div class="input-box">
            <span class="details">Item Name</span>
            <input type="text" name="name" placeholder="Enter your item name" required>
          </div>

          <div class="input-box">
            <span class="details">Item Type</span>
            <select id="itemType" name="types" required>
            <option value="" disabled selected>Select item type</option>
            <option value="Food">Food</option>
            <option value="Transportation">Transportation</option>
            <option value="Housing">Housing</option>
            <option value="Entertainment">Entertainment</option>
            <option value="Internet">Internet</option>
            <option value="Health">Health</option>
            <option value="Shopping">Shopping</option>
            <option value="Vacation">Vacation</option>
            <option value="Payment">Payment</option>
          </select>
          </div>

          <div class="input-box">
            <span class="details">Payment Method</span>
            <select id="itemType" name="method" required>
            <option value="" disabled selected>Select Method</option>
            <option value="Cash">Cash</option>
            <option value="Transfer">Transfer</option>
          </select>
          </div>

          <div class="input-box">
            <span class="details">Item Amount</span>
            <input type="number" name="amount" placeholder="Enter your item amount" required>
          </div>

          <div class="input-box">
            <span class="details">Notes</span>
            <input type="text" name="notes" placeholder="Enter your note" required>
          </div>

          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" name="date" required>
          </div>

          <div class="input-box">
            <span class="details">Status</span>
            <select id="itemType" name="status" required>
            <option value="" disabled selected>Select Method</option>
            <option value="Income">Income</option>
            <option value="Outcome">Outcome</option>
          </select>
          </div>

          <div class="input-img">
            <span class="details">Image</span>
            <input type="file" name="image" id="image" >
          </div>
          
        </div>
        

        <div class="button">
          <input type="submit" value="Submit">
        </div>
        
      </form>
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