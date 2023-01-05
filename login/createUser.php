<?php
// Create database connection and start session
include('misc/dbConnection.php');
session_start();
                                                          
if($_SERVER["REQUEST_METHOD"] == "POST") {    
	// Receive data
	header('Content-Type: text/html; charset=utf-8');
	$sqlcreateemail = mysqli_real_escape_string($sqlconn, $_POST['create-email']);
	$sqlcreateusername = mysqli_real_escape_string($sqlconn, $_POST['create-username']);
	$sqlcreatepassword = mysqli_real_escape_string($sqlconn, $_POST['create-password']);
	
	// Hash password
	$hashed_password = password_hash($sqlcreatepassword, PASSWORD_DEFAULT);
	
	// Check if username or email already exists
    $check=mysqli_query($sqlconn,"SELECT * FROM brugere WHERE brugernavn='$sqlcreateusername' OR emailadresse='$sqlcreateemail'");
    $checkrows=mysqli_num_rows($check);
  
	if($checkrows>0) {
		echo "Brugernavn eller e-mailadresse findes allerede. Retur til <a href=\"/\">forsiden</a>";
	} else {
      	// Send data to database
		$sqlquery = "INSERT INTO brugere (emailadresse, brugernavn, adgangskode) VALUES ('$sqlcreateemail', '$sqlcreateusername', '$hashed_password')";
    	$send = mysqli_query($sqlconn, $sqlquery);
		
      	// Create session variables
      	$_SESSION['user_loggedin'] = $sqlcreateusername;
      
        // Return user to frontpage
    	header('Location: \ ');
	}
}
// Close the database connection
mysqli_close($sqlconn);
?>