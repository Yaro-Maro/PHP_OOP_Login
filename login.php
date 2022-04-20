<?php
include("includes/init.php");
include("includes/database.php");

if (isset($_POST['submit'])) {
  // get data
  $Template->setData('input_user', $_POST['username']);
  $Template->setData('input_pass', $_POST['password']);

  // display an error if the sent form is empty
  if ($Template->getData('input_user') == '' || $Template->getData('input_pass') == '') {
    if ($Template->getData('input_user') == '') {
      $Template->setData('error_user', 'required field!');
    }
    if ($Template->getData('input_pass') == '') {
      $Template->setData('error_pass', 'required field!');
    }
    $Template->setAlert('error', 'Please fill in all required fields');
  }

  // display an error, if the login cridentials are not correct
  else if ($Auth->validateLogin($Template->getData('input_user'), $Template->getData('input_pass')) == FALSE) {
    $Template->setAlert('error', 'Invalid username or password!');
  }

  // else log user in
  else {
    $_SESSION['username'] = $Template->getData('input_user');
    $_SESSION['loggedin'] = TRUE;
    $Template->setAlert('success', 'Welcome <i>' . $Template->getData('input_user') . '</i>');
    $Template->redirect('members.php');
  }

  // display login view
  $Template->load("views/v_login.php");
}

else {
  // display login view if the post is not submitted
  $Template->load("views/v_login.php");
}
