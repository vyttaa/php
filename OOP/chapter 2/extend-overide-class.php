<?php

class User
{
	var $firstname;
	var $lastname;
	var $username;

	function fullName()
	{
		return $this->firstname . ', ' . $this->lastname;
	}
}

class Customer extends User
{
	var $city;
	var $country;

	function location()
	{
		return $this->city . ' ' . $this->country;
	}

	function fullName()
	{
		return $this->firstname . ', ' . $this->lastname . ' (customer)';
	}
}

$u = new User;
$u->firstname= "Sirrul";
$u->lastname= "Munqidzah";
//$u->city= "Bandung";
//$u->country= "Indonesia";

echo $u->fullName() . "<br/>";
//echo $c->location() . "<br/>";

$c = new Customer;
$c->firstname= "Customer";
$c->lastname= "Doe";
$c->city= "Bandung";
$c->country= "Indonesia";

echo $c->fullName() . "<br/>";
echo $c->location() . "<br/>";

if (is_subclass_of($c, 'User')) {
	echo "Instance merupakan Subclass class User <br/>";
}

$parents = class_parents($c);
echo implode(', ', $parents);

?>