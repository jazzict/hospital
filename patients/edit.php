<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['name'] ?>">
			</select>
		</div>
		<div>
			<label for="name">Species:</label>
			<select name="species_id">
				<?php foreach ($species as $spec) : ?>
				<option <?php if ($spec['id'] === $patient['species_id'])  { 
					echo " selected=\"true\""; 
					}
				?> value="<?php echo $spec['id']; ?>"><?php echo $spec['species']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	<div>
		<label for="name">Gender:</label>
		    <input type="radio" name="gender" value="male" checked> Male<br>
  			<input type="radio" name="gender" value="female"> Female<br>
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"><?=$patient['status']?></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>