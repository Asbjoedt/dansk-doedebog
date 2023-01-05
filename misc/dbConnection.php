<?php

// Database connection information
$host = INSERT;
$username = INSERT;
$password = INSERT;
$db = INSERT;
$sqlconn = mysqli_connect($host, $username, $password, $db);

// Inform user if connection failed
if (!$sqlconn) {
	echo "Connection to database failed!";
}

?>