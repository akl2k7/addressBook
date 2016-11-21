<h2>Add Contact</h2>
<form method="POST" action="php/addEntry.php">
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" id="addName" name="name" placeholder="Name"/>
			</div>
			<div class="form-group">
				<label>Phone Number</label>
				<input type="text" class="form-control" id="addPhoneNumber" name="phoneNumber" placeholder="Phone Number"/>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" class="form-control" id="addEmail" name="email" placeholder="Email"/>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Address</label>
				<input type="text" class="form-control" id="addAddress" name="address" placeholder="Address"/>
			</div>
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control" id="addCity" name="city" placeholder="City"/>
			</div>
			<div class="form-group">
				<label>State</label>
				<input type="text" class="form-control" id="addState" name="state" placeholder="State"/>
			</div>
			<div class="form-group">
				<label>Zip Code</label>
				<input type="text" class="form-control" id="addZipCode" name="zipCode" placeholder="Zip Code"/>
			</div>
			<div class="form-group">
				<label>Country</label>
				<input type="text" class="form-control" id="addCountry" name="country" placeholder="Country"/>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Notes</label>
				<textarea class="form-control" id="addNotes" name="notes" placeholder="Notes"></textarea>
			</div>
			<div class="form-group">
				<label>Relationship</label>
				<input type="text" class="form-control" id="addRelationship" name="relationship" placeholder="Relationship"/>
			</div>
		</div>
	</div>
	<button class="btn btn-default">Submit</button>
</form>