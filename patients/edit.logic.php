<?php
			$db = new mysqli('localhost','root','','hospital');
	
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		
		$patient = NULL;
		if (isset($_GET['id'])) {
			// Get Patient for id
			$id = $db->escape_string($_GET["id"]);
			
			$patientQuery = "select * from patient where id=$id";
			$speciesQuery = "select * from species";
			$clientsQuery = "select * from client";

			$patientResult = $db->query($patientQuery);
			$speciesResult = $db->query($speciesQuery);
			$clientsResult = $db->query($clientsQuery);
			
			$patient = $patientResult->fetch_assoc();
			$species = $speciesResult->fetch_all(MYSQLI_ASSOC);
			$clients = $clientsResult->fetch_all(MYSQLI_ASSOC);	
		}
		if ($patient == NULL) {
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		}
	} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
		$db = new mysqli('localhost','root','','hospital');
	
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		

		// Prepare query and execute
		$query = "update patient set name='$name', species_id='$species', status='$status' where id=$id";
		$result = $db->query($query);

   		// Tell the browser to go back to the index page.
    	header("Location: ./");
    	exit(); 
    }
?>