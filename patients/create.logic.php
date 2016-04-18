<?php
	$db = new mysqli('localhost','root','','hospital');
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species_id"]);
		$status = $db->escape_string($_POST["status"]);
		$client = $db->escape_string($_POST["clientname"]);
		$gender = $db->escape_string($_POST["gender"]);
		// Prepare query and execute
		$query = "insert into patient (name, species_id, status, client_id, gender) values ('$name', $species,'$status', $client, '$gender')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	} else {
		$query = "select * from species";
		$query2 = "select * from client";
		$result = $db->query($query);
		$result2 = $db->query($query2);
		$species = $result->fetch_all(MYSQLI_ASSOC);
		$clients = $result2->fetch_all(MYSQLI_ASSOC);
	}

?>