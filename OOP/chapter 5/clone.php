<?php

class Product
{
	public $color;

	public function __construct()
	{
		echo "New product was created. <br/>";
	}
	public function __clone()
	{
		echo "New product was cloned. <br/>";
	}
}

$shirt = new Product;
$shirt->color = 'blue';

$shirt2 = clone $shirt;

echo $shirt->color . "<br/>";
echo $shirt2->color;

echo "<hr/>";

$shirt2->color = 'red';

echo $shirt->color . "<br/>";
echo $shirt2->color;

?>