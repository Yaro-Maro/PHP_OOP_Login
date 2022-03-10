<?php

include("models/m_template.php");

$Template = new Template();

$Template->setData("name", "Roflcopter");
$Template->load("views/v_login.php");
