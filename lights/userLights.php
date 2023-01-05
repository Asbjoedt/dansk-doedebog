<div class="displayLights" id="userLights">
	<div class="columnOne">
		<div class="columnTitle">
			<img src="/misc/candle.png">
			<h2>Mine lys</h2><br>
		</div>
      	<div class="columnSubtitle">Mine tændte lys.</div>
		<div class="lights">
			<?php include('misc/dbConnection.php');
          	// Fetch user data
			$username = $_SESSION['user_loggedin'];
			$sqlquery = "SELECT bruger_id FROM brugere WHERE brugernavn = '$username'";
			$result = mysqli_query($sqlconn, $sqlquery);
         	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$userid = $row['bruger_id'];
          	// Fetch lights based on user data
			$sqlquery2 = "SELECT * FROM lys WHERE bruger_id = '$userid' ORDER BY lys_id";
			$result2 = mysqli_query($sqlconn, $sqlquery2);
			$rows = $result2 -> fetch_all();
            if (mysqli_num_rows($result) > 0) {
              foreach($rows as $row) {
              echo "<div class=\"light\"><div class=\"lightMain\"><img src=\"/misc/candle.png\"><p>$row[3]</p></div><div class=\"lightAuthor\"><p>Lys tændt af $row[2] d. $row[1].</p><div class=\"navigationButton\" id=\"deleteButton\">slet lys</div></div></div>";
              }} else {
                echo "<p>Du har endnu ikke tændt et lys.</p>";
              }
			$sqlconn->close(); ?>
		</div>
	</div>
</div>