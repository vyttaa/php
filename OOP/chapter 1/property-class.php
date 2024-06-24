<?php

class Student
{
	var $name;
	var $country = 'None';
}

$student1 = new Student;
$student2 = new Student;

$student1->name = 'Avita';
$student2->name = 'Naran';

echo $student1->name . "<br/>";
echo $student2->name . "<br/>";

$class_vars = get_class_vars('Student');
echo "Properti Milik Student";
echo "<pre>";
print_r($class_vars);
echo "<pre>";

if (property_exists('Student', 'name')) {
	echo "Properti name tersedia";
} else {
	echo "Properti tidak tersedia";
}

?>