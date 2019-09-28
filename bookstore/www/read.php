<?php

require_once('../db_config.php');

$query = "SELECT * FROM books";

if($results = $db_connection->query($query)) {
  foreach ($results as $result) {
    echo $result['Title'];
    echo '<br>';
  }
} else {
  echo "No results";
}

$db_connection = NULL;