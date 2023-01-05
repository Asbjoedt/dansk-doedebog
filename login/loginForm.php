<div class="primaryInput">
  <div class="columnTwo">
    <div class="columnTitle"><h2>Login</h2></div>
        <div class="columnForm">     
          <form name="login" action="/login/login.php" method="post">
              <label for="login-username"><b>Brugernavn</b></label>
              <input type="text" placeholder="Indtast brugernavn" name="login-username" required>
              <label for="login-password"><b>Password</b></label>
              <input type="password" placeholder="Indtast password" name="login-password" required>
			  <input type="submit" name="send-login" value="Login">
              <span style="font-size: small;">Glemt dit <a href="#newPassword" id="showNewPassword">kodeord</a>?</span>
          </form>
          <?php include('../login/newPasswordForm.php') ?>
    </div>
  </div>
  <div class="columnDivider"></div>
  <div class="columnTwo">
    <div class="columnTitle"><h2>Opret bruger</h2></div>
        <div class="columnForm">     
          <form name="opret-bruger" action="/login/createUser.php" method="post">
              <label for="create-password"><b>E-mailadresse</b></label>
              <input type="text" placeholder="Indtast e-mailadresse (påkrævet)" name="create-email" required>
              <label for="create-username"><b>Brugernavn</b></label>
              <input type="text" placeholder="Indtast brugernavn (påkrævet)" name="create-username" required>
              <label for="create-password"><b>Password</b></label>
              <input type="password" placeholder="Indtast password (påkrævet)" name="create-password" required>
			  <input type="submit" name="send-opret" value="Opret bruger">
          </form>
    </div>
  </div>
</div>