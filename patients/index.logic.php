<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT patient.*, species.species, client.name AS clientname, client.phonenumber, client.email FROM patient 
	INNER JOIN client ON patient.client_id=client.id 
	INNER JOIN species ON patient.species_id=species.id";
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
	
	
	
?>