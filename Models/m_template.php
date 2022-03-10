<?php

/*
  Template Class
  Template object will work on our views
  Handles all templating tasks - displaying templates, alerts & errors
*/

class Template {
  private $data;

  // Constructor
  function __construct() {}

    // Functions
    function load($url) {
      include($url);
    }

  // Set Data
  function setData($name, $value) {
    $this->data[$name] = htmlentities($value, ENT_QUOTES);
  }

  // Get Data
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
}
