<?php

// Start the session
session_start();

// Check if the form has been submitted
if (isset($_POST['password'])) {
  // Check if the entered password is correct
  if ($_POST['password'] == 'mypassword') {
    // Set the logged_in session variable
    $_SESSION['logged_in'] = true;
  }
}

// Check if the user is logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
  // Display the protected page
  ?>
  <h1>Protected Page</h1>
  <p>Welcome! You are logged in and can view this page.</p>
  <?php
} else {
  // Display the login form
  ?>
  <form method="post" action="">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Log in">
  </form>
  <?php
}

?>
