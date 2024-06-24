<?php

class Siswa
{
	public static $instanceCount = 0;

	public $total;
	public $target;

	public function __construct($args = [])
	{
		self::$instanceCount++;
		$this->total = $args['total'] ?? $this->total;
		$this->target = $args['target'] ?? $this->target;
	}
}

class Elementary extends Siswa
{
	public $total = 3;
	public $target = 2;
}

class Junior extends Siswa
{
	public $total = 6;
	public $target = 1;
}

class Senior extends Siswa
{
	public $total = 7;
	public $target = 4;
}

$elementary = new Elementary(['total' => 2, 'target' => 1]);
echo "Elementary: {$elementary->total} <br/>";
echo "Elementary: {$elementary->target} <br/>";

$junior = new Junior(['total' => 2, 'target' => 1]);
echo "Junior: {$junior->total} <br/>";
echo "Junior: {$junior->target} <br/>";

$senior = new Senior();
echo "Senior: {$senior->total} <br/>";
echo "Senior: {$senior->target} <br/>";

echo "instanceCount: " . Siswa::$instanceCount;
?>