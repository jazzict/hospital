<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$phonenumber = $db->escape_string($_POST["phonenumber"]);
		$email = $db->escape_string($_POST["email"]);
		
		// Prepare query and execute
		$query = "insert into client (name, phonenumber, email) values ('$name','$phonenumber','$email')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>