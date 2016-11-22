<?php
	// Address book

	// Sections: View, Add, Delete

class Contact{
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

	function __construct($name, $phone, $email, $address, $city, $state, $zipCode, $country, $notes, $relationship){
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
}
?>