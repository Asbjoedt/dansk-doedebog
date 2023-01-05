<div class="searchBar">
	<form name="soeglys" action="/search/search.php" method="GET">
	<div class="formField">
		<label for="searchname"><strong>Søg på afsenders navn</strong></label>
		<input type="search" name="searchname" value="<?php echo "$sanitizedsearchname" ?>">
	</div>
	<div class="formField">
		<label for="searchcontent"><strong>Søg på beskedens indhold</strong></label>
		<input type="search" name="searchcontent" value="<?php echo "$sanitizedsearchcontent" ?>">
	</div>
	<input type ="submit" name="sendsoeg" value="Søg">
	</form>
</div>