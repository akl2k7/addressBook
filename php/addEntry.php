<?php
	include("contact.php");

	$contacts = [];

	// Check if file exists
	if(file_exists("json/contacts.json")){
		// If file exists, Load info from file
		$file = fopen("json/contacts.json", "r");
		$rawData = fread($file, filesize($file));

		// Convert raw data to an array
		$data = json_decode($rawData);

		for($i = 0; $i < count($data); $i++){
			$contact = new Contact($data[i]->name, $data[$i]->phoneNumber, $data[$i]->email, $data[$i]->address, $data[$i]->city, $data[$i]->state, $data[$i]->zipCode, $data[$i]->country, $data[$i]->notes, $data[$i]->relationship);
		}

		fclose($file);
	}

	// Take data from form
	$name = $_POST["name"];
	$phoneNumber = $_POST["phoneNumber"];
	$email = $_POST["email"];

	$address = $_POST["address"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zipCode = $_POST["zipCode"];
	$country = $_POST["country"];

	$notes = $_POST["notes"];
	$relationship = $_POST["relationship"];

	// Add data from form to info from file or empty array
	$newContact = new Contact($name, $phoneNumber, $email, $address, $city, $state, $zipCode, $country, $notes, $relationship);
	array_push($contacts, $newContact);

	// Save info back to file, overwriting it
	$file = fopen("json/contacts.json", "w");
	fwrite($file, json_encode($contacts));
	fclose($file);

	// Redirect back to index.html
?>
<script>
window.location = "../index.html";
</script>