<?php
include("includes/init.php");


if ($Auth->checkLoginStatus() == FALSE) {
  $Template->setAlert('error', 'Unauthorized!');
  $Template->redirect('login.php');
}

else {
  $Template->load("views/v_members.php");
}
