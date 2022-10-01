<?php

$db_host = '_____';
$db_name = '_____';
$db_username = '_____';
$db_password = '_____';

$dsn = "mysql:host=$db_host;dbname=$db_name;";

// to avoid showing the credentials when error occurs // PDO is PHP data object
try {
  $db_connection = new PDO($_____, $_____, $_____);
} catch (Exception $e) {
  echo "An error occured: " . $e->getMessage();
}