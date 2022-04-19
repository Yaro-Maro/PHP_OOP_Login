<?php

/*
  Template Class
  Template object will work on our views
  Handles all templating tasks - displaying templates, alerts & errors
*/

class Template {
  private $data;
  private $alertTypes;

  // Constructor
  function __construct() {}

  // Functions
  function load($url) {
    include($url);
  }

  // Set / Get Data
  function setData($name, $value) {
    $this->data[$name] = htmlentities($value, ENT_QUOTES);
  }

  function getData($name) {
    if (isset($this->data[$name])) {
      return $this->data[$name];
    }
    else {
      return '';
    }
  }

  // Redirect
  function redirect($url) {
    header("Location: $url");
  }

  // Set / Get Alerts
  function setAlertTypes($types) {
    $this->alertTypes = $types; // 'success', 'warning', 'error'
  }

  function setAlert($type, $value) {
    $_SESSION[$type][] = $value;
  }

  function getAlerts() {
    $alertMessage = '';
    foreach($this->alertTypes as $types) // loop through each alert type (associate array)
    {
      if (isset($_SESSION[$types])) // loop through each item within the type (numbered array)
      {
        foreach ($_SESSION[$types] as $value)
        {
          $alertMessage .= '<li class="' . $types . '">' . $value . '</li>';
        }
        unset($_SESSION[$types]);
      }
    }
    return $alertMessage;
  }
}
