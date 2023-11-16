<?php
  session_start();

  // Check if the user is logged in
  if (!isset($_SESSION["email"])) {
    // If not logged in, redirect to the login page
    header("Location: login.html");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h2>Welcome to your Profile</h2>
    <div class="container">
      <p>First Name: <?php echo $_SESSION["fname"];?></p>
      <p>Last Name: <?php echo $_SESSION["lname"];?></p>
      <p>Email: <?php echo $_SESSION["email"];?></p>
      <p><a href="logout.php">Logout</p>
    </div>
  </body>
</html>