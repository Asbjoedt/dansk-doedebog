<?php
include('../misc/dbConnection.php');

if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];
  $select=mysql_query("select email,password from user where md5(email)='$email' and md5(password)='$pass'");
  if(mysql_num_rows($select)==1)
  {
    ?>
    <?php
  }
}
?>

<!DOCTYPE html>
<html>
<?php include("../misc/head.php"); ?>
<body>
	<div class="page">
      <?php include('../templates/header.php') ?>    
      <div class="">
		<form method="post" action="submit_new.php">
		<input type="hidden" name="email" value="<?php echo $email;?>">
        <p>Enter New password</p>
        <input type="password" name='password'>
        <input type="submit" name="submit_password">
        </form>
      </div>
      <?php include('../templates/footer.php') ?>
    </div>
</body>
</html>