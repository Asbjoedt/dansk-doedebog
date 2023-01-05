<div class="primaryInput">
	<div class="columnTwo">
		<div class="columnTitle">
			<img src="/misc/candle.png">
			<h2>Tænd et lys</h2><br>
		</div>
		<div class="columnSubtitle">Tænd et lys for en person, som er gået bort.</div>		
      <?php if($_SESSION['user_loggedin'] === null) { echo "<div class=\"columnTwo\">
      <div class=\"loginDisplay\"><a href=\"/login/login.php\">Login eller opret bruger</a>, før du tænder lys.</div>
      </div>"; } else {
      echo "<div class=\"columnForm\">
                <form name=\"taendlys\" method=\"POST\" action=\"/lights/submitLight.php\">
                    <label for=\"message\"><strong>Din besked</strong></label><br>
                    <textarea name=\"message\" id=\"message\" required autocomplete=\"off\"></textarea><br>
                    <input type=\"checkbox\" id=\"afdoedeid\" name=\"afdoedeid\" required>
                    <label for=\"afdoedeid\">Jeg omtaler kun afdøde med fornavn <b>(påkrævet - <a href=\"#personoplysninger\" id=\"showDataProtection\">læs mere</a>)</b></label><br>
                    <input type=\"checkbox\" id=\"samtykke\" name=\"samtykke\" required>
                    <label for=\"samtykke\">Jeg giver samtykke til registrering og behandling af mine personoplysninger <b>(påkrævet - <a href=\"#personoplysninger\" id=\"showDataProtection\">læs mere</a>)</b></label><br>
                    <input type=\"submit\" name=\"sendlys\" value=\"Tænd lys\">
                </form>
            </div>"; } ?>
  </div>
	<div class="columnDivider"></div>
	<div class="columnTwo">
		<div class="columnTitle">
			<img src="/misc/candle.png">
			<h2>Søg efter lys</h2><br>
		</div>
		<div class="columnSubtitle">Søg efter lys tændt for en person, som er gået bort.</div>
		<div class="columnForm">
			<form name="soeglys" action="/search/search.php" method="GET">
              <label for="searchname"><strong>Søg på afsenders brugernavn</strong></label>
				<input type="search" name="searchname"><br>
              <label for="searchcontent"><strong>Søg på beskedens indhold</strong></label>
				<input type="search" name="searchcontent"><br>
				<input type ="submit" name="sendsoeg" value="Søg">
			</form>
		</div>
	</div>
</div>