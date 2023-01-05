<div class="displayLights" id="recentLights">
	<div class="columnOne">
		<div class="columnTitle">
			<img src="/misc/candle.png">
			<h2>Seneste lys</h2><br>
		</div>
      	<div class="columnSubtitle">De 5 senest tændte lys.</div>
		<div class="lights">
			<?php include('misc/dbConnection.php'); 
			$sqlquery = "SELECT * FROM lys ORDER BY lys_id DESC LIMIT 5";
			$result = mysqli_query($sqlconn, $sqlquery);
			$rows = $result->fetch_all();
			foreach($rows as $row) {
			echo "<div class=\"light\"><div class=\"lightMain\"><img src=\"/misc/candle.png\"><p>$row[3]</p></div><div class=\"lightAuthor\"><p>Lys tændt af $row[2] d. $row[1].</p></div></div>";
			}
			$sqlconn->close(); ?>
		</div>
	</div>
</div>