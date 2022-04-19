<?php
/*
  DATABASE
  Will create database object, and allow us to access the database.
*/


// database settings
$server = 'localhost';
$username = 'root';
$pass = 'root';
$dbname = 'oop_login';

// connect to the database
$Database = new mysqli($server, $username, $pass, $dbname);

// error reporting
mysqli_report(MYSQLI_REPORT_ERROR);
