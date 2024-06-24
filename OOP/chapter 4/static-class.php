<?php

class Students
{
	public static $grades = ['SD', 'SMP', 'SMA'];
	private static $totalStudents = 0;

	public static function motto()
	{
		return "Learn PHP OOP";
	}

	public static function count()
	{
		return self::$totalStudents;
	}

	public static function addStudents()
	{
		return self::$totalStudents++;
	}
}

echo Students::$grades[2] . "<br/>";
echo Students::motto() . "<br/>";

echo Students::count() . "<br/>";
Students::addStudents();
echo Students::addStudents() . "<br/>";

?>