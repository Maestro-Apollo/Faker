<?php


require 'vendor/autoload.php';
$faker = Faker\Factory::create();

echo $faker->name . "<br>";
echo $faker->address;
echo $faker->phoneNumber;