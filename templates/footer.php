<?php if (file_exists('../about.php')) { include('../about.php'); } else { include('about.php'); } ?>
<?php if (file_exists('../dataProtection.php')) { include('../dataProtection.php'); } else { include('dataProtection.php'); } ?>

<div class="footer">
	<div class="footerElement">
		<a href="mailto:as@webkultur.dk" target="_blank">Kontakt</a>
	</div>
	<div class="footerElement">
		<a href="#om" id="showAbout">Om</a>
	</div>
  	<div class="footerElement">
		<a href="#personoplysninger" id="showDataProtection">Personoplysninger</a>
	</div>
  	<?php if($_SESSION['user_loggedin'] === null) { echo "<div class=\"footerElement\"><a href=\"/login/login.php\">Login</a></div>"; } 
  	else { echo "<div class=\"footerElement\"><a href=\"/login/logout.php\">Logout</a></div>"; } ?>
    <div class="footerElement" id="payoff-right-bottom">
		<a href="/">Dansk Dødebog</a>
	</div>
</div>

<script>
   	// Show About section
    var el1 = document.getElementById('showAbout');
    var sh1 = document.getElementById('om');
    el1.addEventListener('click', function(){
        sh1.classList.toggle('show');
    });

  	// Show GDPR section
    var el2 = document.getElementById('showDataProtection');
    var sh2 = document.getElementById('personoplysninger');
    el2.addEventListener('click', function(){
        sh2.classList.toggle('show');
    });
</script>