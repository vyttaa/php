<?php

require __DIR__ . '/vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create();

echo $faker->name . "<br/>";
echo $faker->address;
?>