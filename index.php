<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<title></title>
</head>
<body>
	<div class="container">
		<h1>Address Book</h1>
		<div id="viewContacts">
			<?php 
			include("viewContacts.php");
			viewContacts();
			?>	
		</div>
		<div id="addContact">
			<?php 
				echo file_get_contents("addContact.php");
			?>
		</div>
		<div id="removeContact">
			<h2>Remove Contact</h2>
		</div>
		<div id="editContacts">
			<h2>Edit Contacts</h2>
		</div>
	</div>
</body>
</html>