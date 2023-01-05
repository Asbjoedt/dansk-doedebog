<?php

// Create database connection
include '../misc/dbConnection.php';
session_start();

// Receive data
header('Content-Type: text/html; charset=utf-8');
$sanitizedmessage = mysqli_real_escape_string($sqlconn, $_POST['message']);
$username = $_SESSION['user_loggedin'];
$sqlquery = "SELECT bruger_id FROM brugere WHERE brugernavn = '$username'";
$result = mysqli_query($sqlconn, $sqlquery);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$userid = $row['bruger_id'];

// Send data to database
$sqlquery2 = "INSERT INTO lys (navn, besked, bruger_id) VALUES ('$username', '$sanitizedmessage', $userid)";
$send = mysqli_query($sqlconn, $sqlquery2);

// Close the database connection
mysqli_close($sqlconn);

// Return user to frontpage
header('Location: /#userLights');

?>