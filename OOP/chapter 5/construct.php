<?php

class Siswa
{
	public static $instanceCount = 0;

	public function __construct()
	{
		self::$instanceCount++;
	}
}

class Elementary extends Siswa
{
	public $total = 3;
}

class Junior extends Siswa
{
	public $total = 6;
}

class Senior extends Siswa
{
	public $total = 7;
}

$elementary = new Elementary;
echo "Elementary: {$elementary->total} <br/>";

$junior = new Junior;
echo "Junior: {$junior->total} <br/>";

$senior = new Senior;
echo "Senior: {$senior->total} <br/>";

echo "instanceCount: " . Siswa::$instanceCount;
?>