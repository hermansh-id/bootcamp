<?php

$db_host = 'localhost';
$db_name = 'bookstore';
$db_username = 'ksycz';
$db_password = 'Vzc70XF6NqudaSsx';

$dsn = "mysql:host=$db_host;dbname=$db_name;";

// to avoid showing the credentials when error occurs
try {
  $db_connection = new PDO($dsn, $db_username, $db_password);
} catch (Exception $e) {
  echo "An error occured: " . $e->getMessage();
}