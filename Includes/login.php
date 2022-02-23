<?php

include("../models/m_template.php");

$Template = new Template();

$Template->setData('Rofl', 5);
$Template->getData('Rofl');
$Template->load("../views/v_login.php");
