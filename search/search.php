<?php
// Create database connection
include('../misc/dbConnection.php');

// Fetch form data
$sanitizedsearchname = mysqli_real_escape_string($sqlconn, $_GET['searchname']);
$sanitizedsearchcontent = mysqli_real_escape_string($sqlconn, $_GET['searchcontent']);

// Create sql query and fetch data from database
$sqlquery = "SELECT * FROM lys WHERE navn LIKE '%" . $sanitizedsearchname . "%' OR besked LIKE '%" . $sanitizedsearchcontent . "%'";
if (!empty($sqlquery)) {
	$result = mysqli_query($sqlconn, $sqlquery); 
}
else {
	// Refresh page
	header('Location: $_SERVER');
}
?>

<!DOCTYPE html>
<html>
<?php include('../misc/head.php'); ?>
<body>
    <div class="page">
		<?php include('../templates/header.php') ?>
      	<?php include('../templates/breadcrumbs.php') ?>
		<div class="searchPage">
			<?php include('../search/searchBar.php') ?>
          <div class="searchResults" id="searchResults">
            <div class="columnTitle"><h2>Søgeresultater</h2></div>        
                  <?php
                  echo "<p>Du søgte på: <strong>Brugernavn</strong>: $sanitizedsearchname | <strong>Indhold</strong>: $sanitizedsearchcontent</p>"; 				
                  if (!empty($result)) {
                      $rows = $result -> fetch_all();
                        foreach ($rows as $row) {
                          echo "<div class=\"light\"><div class=\"lightMain\"><img src=\"/misc/candle.png\"><p>$row[3]</p></div><div class=\"lightAuthor\"><p>Lys tændt af $row[2] d. $row[1].</p></div></div>";                            
                        }                  
                  }
                  else {
                    echo "<p>Ingen resultater matchede søgeordene.</p>";
                  }?>
          </div>
      	</div>
		<?php include('../templates/breadcrumbs.php') ?>
		<?php include('../templates/footer.php') ?>
    </div>
</body>
</html>