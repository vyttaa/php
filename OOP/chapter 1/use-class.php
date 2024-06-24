<?php

class Student
{
	var $firstname;
	var $lastname;
	var $country = 'None';

	function sayHello()
	{
		return 'Hello, World!';
	}

	function fullName()
	{
		return $this->firstname . ' ' . $this->lastname;
	}
}

$student1 = new Student;

$student1->firstname = 'Sirrul';
$student1->lastname = 'Munqidzah';

echo $student1->firstname . "<br/>";
echo $student1->lastname . "<br/>";

echo $student1->sayHello() . "<br/>";
echo $student1->fullName() . "<br/>";

$class_methods = get_class_methods('Student');
echo "Method Milik Student";
echo "<pre>";
print_r($class_methods);
echo "<pre>";

if (method_exists('Student', 'sayHello')) {
	echo "Method name tersedia";
} else {
	echo "Method tidak tersedia";
}

?>