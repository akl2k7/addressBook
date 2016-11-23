<?php
	// Address book

	// Sections: View, Add, Delete

class Contact implements JsonSerializable{
	private $name;
	private $phoneNumber;
	private $email;
	private $address;
	private $city;
	private $state;
	private $zipCode;
	private $country;
	private $webAddress;
	private $notes;
	private $relationship;

	public function __construct($name, $phone, $email, $address, $city, $state, $zipCode, $country, $notes, $relationship){
		$this->name = $name;
		$this->phoneNumber = $phone;
		$this->email = $email;
		$this->address = $address;
		$this->city = $city;
		$this->state = $state;
		$this->zipCode = $zipCode;
		$this->country = $country;
		$this->notes = $notes;
		$this->relationship = $relationship;
	}

	public function jsonSerialize(){
		$output = [
			"name" => $this->name,
			"phoneNumber" => $this->phoneNumber,
			"email" => $this->email,
			"address" => $this->address,
			"city" => $this->city,
			"state" => $this->state,
			"zipCode" => $this->zipCode,
			"country" => $this->country,
			"notes" => $this->notes,
			"relationship" => $this->relationship
		];
		return $output;
	}
}
?>