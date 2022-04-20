<?php
include("includes/init.php");

// show error, if a user is not logged in
if ($Auth->checkLoginStatus() == FALSE) {
  $Template->setAlert('error', 'Unauthorized!');
  $Template->redirect('login.php');
}

// else, show the content
else {
  $Template->load("views/v_members.php");
}
