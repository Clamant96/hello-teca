<?php
$mysqli = new mysqli("fdb28.awardspace.net","3646899_cadastro","","3646899_cadastro");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>