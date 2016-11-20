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
		<div id="addEntry">
			<form method="POST" action="php/addEntry.php">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" id="addName" placeholder="Name"/>
						</div>
						<div class="form-group">
							<label>Phone Number</label>
							<input type="text" class="form-control" id="addPhoneNumber" placeholder="Phone Number"/>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control" id="addEmail" placeholder="Email"/>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Address</label>
							<input type="text" class="form-control" id="addAddress" placeholder="Address"/>
						</div>
						<div class="form-group">
							<label>City</label>
							<input type="text" class="form-control" id="addCity" placeholder="City"/>
						</div>
						<div class="form-group">
							<label>State</label>
							<input type="text" class="form-control" id="addState" placeholder="State"/>
						</div>
						<div class="form-group">
							<label>Zip Code</label>
							<input type="text" class="form-control" id="addZipCode" placeholder="Zip Code"/>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Notes</label>
							<textarea class="form-control" id="addNotes" placeholder="Notes"></textarea>
						</div>
						<div class="form-group">
							<label>Relationship</label>
							<input type="text" class="form-control" id="addRelationship" placeholder="Relationship"/>
						</div>
					</div>
				</div>
				<button class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>