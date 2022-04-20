<?php
include("includes/init.php");

// log out
$Auth->logout();

// redirect
$Template->setAlert('success', 'Successfully logged out.');
$Template->redirect('login.php');
