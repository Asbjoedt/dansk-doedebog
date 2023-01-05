<?php
// Create database connection and start session
include('../misc/dbConnection.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
	// Fetch form data and prevent SQL injection
	$sqlloginusername = mysqli_real_escape_string($sqlconn, $_POST['login-username']);
	$sqlloginpassword = mysqli_real_escape_string($sqlconn, $_POST['login-password']);
      
	$sqlquery = "SELECT * FROM brugere WHERE brugernavn = '$sqlloginusername'";
	$result = mysqli_query($sqlconn,$sqlquery);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
	$count = mysqli_num_rows($result);
      
	// If result has match
	if($count == 1) {
      if (password_verify($sqlloginpassword, $row['adgangskode'])) {
		$_SESSION['user_loggedin'] = $sqlloginusername;
		$_SESSION['userid'] = $row['bruger_id'];
        $_SESSION['username'] = $row['brugernavn'];
        header("location: \ ");
      } else {
        $error = "Din adgangskode er forkert";
      }
	} else {
        $error = "Dit brugernavn er forkert";
	}
	}
// Close the database connection
mysqli_close($sqlconn);
?>

<!DOCTYPE html>
<html>
<?php include('../misc/head.php'); ?>
<body>
    <div class="page">
		<?php include('../templates/header.php') ?>
        <?php include('../templates/breadcrumbs.php') ?>
     	<?php include('../login/loginForm.php') ?>
        <?php include('../templates/breadcrumbs.php') ?>
		<?php include('../templates/footer.php') ?>
    </div>
</body>
</html>