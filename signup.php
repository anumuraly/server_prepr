<?php
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    // Password validation
    if($password != $confirm_password) {
      echo "Passwords do not match. Please try again";;
    } else {
      // Store user information in a session
      $_SESSION["fname"] = $fname;
      $_SESSION["lname"] = $lname;
      $_SESSION["email"] = $email;
      // Redirect to the profile page
      header("Location: profile.php");
      exit();
    }
  }
?>