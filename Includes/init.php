<?php
/*
  INIT
  Basic configuration settings. Included on every page.
*/

//create objects
include("models/m_template.php");
include("models/m_auth.php");
$Template = new Template();
$Template->setAlertTypes(['success', 'warning', 'error']);

$Auth = new Auth();

// start session
session_start();
