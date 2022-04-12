<?php
/*
  INIT
  Basic configuration settings. Included on every page.
*/

//create objects
include("models/m_template.php");
include("models/auth.php");
$Template = new Template();
$Template->setAlertTypes(['success', 'warning', 'error']);

$Authorization = new Authorization();

// start session
session_start();
