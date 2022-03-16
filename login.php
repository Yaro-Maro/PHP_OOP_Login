<?php

session_start();

include("Models/m_template.php");

$Template = new Template();

$Template->setAlertTypes(['success', 'warning', 'error']);
$Template->setAlert('success', 'Success message!' );
$Template->setAlert('warning', 'Warning message!');
$Template->setAlert('error', 'Error message!');

$Template->setData("setting_name", "setting_value");
$Template->load("views/v_login.php");
