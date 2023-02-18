<?php

// Include the database configuration file
include 'config.php';

// Check if the user has submitted the form
if (isset($_POST['submit'])) {
//   $username = $db->real_escape_string($_POST['username']);
  $password = $db->real_escape_string($_POST['password']);

  // Check if the username and password are not empty
  if (!empty($password)) {
    // Insert the new user into the database
    $query = "INSERT INTO users (password) VALUES ('$password')";
    if ($db->query($query)) {
      // Registration successful
      header('Location: login.php');
    } else {
      // Registration failed
      echo "Error: " . $query . "<br>" . $db->error;
    }
  } else {
    // Empty fields
    echo "Please enter a password";
  }
}

?>
<form action="register.php" method="post">
  <!-- <label for="username">Username:</label> -->
  <!-- <input type="text" name="username" required> -->
  <br>
  <label for="password">Password:</label>
  <input type="password" name="password" required>
  <br>
  <input type="submit" name="submit" value="Register">
</form>
