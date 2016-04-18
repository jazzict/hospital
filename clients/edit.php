<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit client</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$client['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$client['name']?>">
		</div>
		<div>
			<label for="name">Phonenumber:</label>
			<input type="text" id="phonenumber" name="phonenumber" value="<?=$client['phonenumber']?>">
		</div>
		<div>
			<label for="name">Email:</label>
			<textarea id="email" name="email"><?=$client['email']?></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>