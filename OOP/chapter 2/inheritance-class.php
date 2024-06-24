<?php

class User
{
	var $firstname;
	var $lastname;
	var $username;

	function fullName()
	{
		return $this->firstname . ' ' . $this->lastname;
	}
}

class Customer extends User
{

}

$c = new Customer;
$c->firstname= "Customer";
$c->lastname= "Doe";

echo $c->fullName() . "<br/>";

if (is_subclass_of($c, 'User')) {
	echo "Instance merupakan Subclass class User <br/>";
}

$parents = class_parents($c);
echo implode(', ', $parents);

?>