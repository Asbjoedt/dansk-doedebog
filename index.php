<?php session_start(); ?>

<!DOCTYPE html>
<html>
<?php include('misc/head.php'); ?>
<body>
	<div class="page">
      <?php include('templates/header.php') ?>
      <?php include('primaryInput.php') ?>
      <?php if($_SESSION['user_loggedin'] !== null) { include('lights/userLights.php'); } ?>
      <?php include('lights/recentDisplay.php'); ?>
      <?php include('templates/footer.php') ?>
    </div>
</body>
</html>