<div class="columnForm" id="newPassword">
  <form method="post" action="/login/submitNewPassword.php">
      <label for="email-password"><b>E-mailadresse</b></label>
      <input type="text" placeholder="Indtast e-mailadresse" name="email-password">
      <input type="submit" name="submit-email" value="E-mail link">
  </form>
</div>

<script>
   	// Show new password section
    var el3 = document.getElementById('showNewPassword');
    var sh3 = document.getElementById('newPassword');
    el3.addEventListener('click', function(){
        sh3.classList.toggle('show');
    });
</script>