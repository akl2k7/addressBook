<?php
	include("php/contact.php");

	function viewContacts(){
		print "<h2>View Contacts</h2>";

			$contacts = [];

			// Check for existence of JSON file containing contact info
			if(file_exists("json/contacts.json")){
				// Load data from JSON file and save it into an array of Contact objects
				$file = fopen("json/contacts.json", "r");
				$rawData = fread($file, filesize("json/contacts.json"));

				// Convert raw data to an array
				$data = json_decode($rawData);

				for($i = 0; $i < count($data); $i++){
					$contact = new Contact($data[$i]->name, $data[$i]->phoneNumber, $data[$i]->email, $data[$i]->address, $data[$i]->city, $data[$i]->state, $data[$i]->zipCode, $data[$i]->country, $data[$i]->notes, $data[$i]->relationship);
					array_push($contacts, $contact);
				}

				fclose($file);
			}

			// Display names of contacts in a list, with the option of editing
				print '
				<div class="row">
					<div class="col-md-4">
						<ul class="list-group">';

				for($i = 0; $i < count($contacts); $i++){
					print $contacts[$i]->output();
				}

				print '		</ul>
						</div>
					</div>';
	}
?>