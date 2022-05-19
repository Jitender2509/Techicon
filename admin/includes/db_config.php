<?php

$db['db_host'] = "localhost";
$db['db_user'] = "techlive";
$db['db_pass'] = "Techlive@123";
$db['db_name'] = "techlive_techicon";

foreach ($db as $key => $value) 
{
	define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>