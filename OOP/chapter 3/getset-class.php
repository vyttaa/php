<?php

class Product
{
	private $price;

	public function setPrice($value)
	{
		$noformat= preg_replace('/Rp/', '', $value);
		$float = floatval($noformat);
		if ($float <= 0) {
			return;
		}
		$this->price = $float;
	}

	public function getPrice()
	{
		return 'Rp' . number_format($this->price, 2);
	}
}

$setget = new Product;
$setget->setPrice('652328');
echo $setget->getPrice();

?>