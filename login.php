<?php
  session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if the credentials match the signed-up user
    if (isset($_SESSION["email"]) && $_SESSION["email"] == $email && $_SESSION["password"] == $password) {
      $_SESSION["email"] = $email;

      // Set a cookie if "Remember Me" is checked
      if (isset($_POST["remember"])) {
        setcookie("remember_me", $email, time() + (30 * 24 * 60 * 60)); // Cookie expires in 30 days
      }

      // Redirect to the profile page
      header("Location: profile.php");
      exit();
    } else {
      // If credentials are invalid, display an error message
      echo "Invalid email or password. Please try again.";
    }
  }
?>