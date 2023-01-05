<?php
include('../misc/dbConnection.php');

if(isset($_POST['submit-email']) && $_POST['email-password'])
{
  	$to = mysqli_real_escape_string($sqlconn, $_POST['email-password']);
	$sqlquery = mysql_query("SELECT emailadresse,adgangskode FROM brugere WHERE emailadresse='$to'");
	if(mysql_num_rows($sqlquery) == 1)
	{
		while($row=mysql_fetch_array($select))
		{
			$email=md5($row['email']);
			$pass=md5($row['password']);
		}
      $subject = 'Registrering af nyt kodeord';
      $link = 'www.dødebog.dk/login/reset.php?key=".$email."&reset=".$pass.';
      $message = 'Her er dit link til registrering af ny adgangskode på DANSK DØDEBOG:' . "\r\n" .$link.;
      $headers = 'From: as@webkultur.dk' . "\r\n" .
          'Reply-To: as@webkultur.dk' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();

      mail($to, $subject, $message, $headers);
    }
}
// Return user to login page
header('Location: ../login/login.php');
?>