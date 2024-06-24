<?php

class User
{
	public $firstname;
	public $lastname;
	public $username;

	protected $regID = 1001;
	private $level = 'User';

	public function fullName()
	{
		return $this->firstname . ' ' . $this->lastname;
	}

	protected function sayProtect()
	{
		return "Hello, Protection!";
	}

	private function sayPrivat()
	{
		return "Hello, Private!";
	}

	public function sayMe()
	{
		return $this->sayPrivat();
	}
}

class Customer extends User
{
	public function sayParent()
	{
		return $this->sayProtect();
	}
}

$u = new User;
$u->firstname= "User";
$u->lastname= "Class";

//echo $u->regID . "<br/>";
//echo $u->level . "<br/>";

echo $u->fullName() . "<br/>";
echo $u->sayMe() . "<br/>";
//echo $u->sayProtect();
//echo $u->sayPrivat();

$c = new Customer;
$c->firstname= "Customer";
$c->lastname= "Doe";

echo $c->fullName() . "<br/>";
echo $c->sayParent() . "<br/>";