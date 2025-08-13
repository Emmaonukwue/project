<?php
$mysqli = new mysqli("localhost","jufpdtoz_root","jufpdtoz_test1","jufpdtoz_test1");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

include("functions.php");
?>