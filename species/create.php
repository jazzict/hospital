<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New Species</h1>
	<form method="post">
		<div>
			<label for="species">Species:</label>
			<input type="text" id="species" name="species">
		</div>
		
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>