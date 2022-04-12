<?php
/*
  Authorization Class
  Deal with auth tasks
*/

class Auth
{
  private $salt = 'j4H9?s0d';

  // Constructor
  function __construct(){}

  /*
  Functions
  */
  //Validate Login
  function validateLogin($username, $password) {
    global $Database;

    // Create query
    if ($statement = $Database->prepare("SELECT * FROM users WHERE username = ? AND password = ?")) {
      $statement->bind_param("ss", $username, md5($password . $this->salt));
      $statement->execute();
      $statement->store_result();
      // Check result
      if ($statement > 0) {
        // Success
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
  function logout()
  {
    session_destroy();
    session_start();
  }



}
