<?php

include("includes/database.php");
include("includes/init.php");

if (isset($_POST['submit'])) {
  // get data
  $Template->setData('input_user', $_POST['username']);
  $Template->setData('input_pass', $_POST['password']);

  // display an error if the sent form is empty
  if ($_POST['username'] === '' || $_POST['password'] === '') {
    if ($_POST['username'] === '') {
      $Template->setData('error_user', 'required field!');
    }
    if ($_POST['password'] === '') {
      $Template->setData('error_pass', 'required field!');
    }
    $Template->setAlert('Please fill in all required fields', 'error');
  }

  // display an error, if the login cridentials are not correct
  else if ($Auth->validateLogin($Template->getData('input_user'), $Template->getData('input_pass')) === FALSE) {
    $Template->setAlert('Invalid username or password!', 'error');
  }

  // else log user in
  else {
    $Template->setAlert('Welcome <i>' . $Template->getData('input_user') . '</i>', 'success');
    $Template->redirect('members.php');
  }

  // display login view
  $Template->load("views/v_login.php");
}

else {
  $Template->load("views/v_login.php");
}
