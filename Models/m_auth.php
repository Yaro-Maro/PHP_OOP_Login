<?php
/*
  Authorization Class
  Deal with auth tasks
*/

class Auth {
  private $salt = 'j4H9?s0d';

  // Constructor
  function __construct() {}

  //Validate Login
  function validateLogin($username, $password) {
    global $Database;
    // Execute query
    if ($statement = $Database->prepare("SELECT * FROM users WHERE username = ? AND password = ?")) {
      $__password = md5($password . $this->salt);
      $statement->bind_param("ss", $username, $__password);
      $statement->execute();
      $statement->store_result();
      // Return result
      if ($statement->num_rows > 0) {
        $statement->close();
        return TRUE;
      }
      else {
        $statement->close();
        return FALSE;
      }
    }
    // Statement could not be prepared
    else {
      die("ERROR: Could not prepare mySQLi statement.");
    }
  }

  // Check Login Status
  function checkLoginStatus() {
    if (isset($_SESSION['loggedin'])) {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }
  // Logout
  function logout() {
    session_destroy();
    session_start();
  }
}
