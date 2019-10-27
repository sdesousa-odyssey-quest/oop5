<?php

require '../vendor/autoload.php';
require '../src/Interfaces/LightableInterface.php';

use App\Vehicle;

$bicycle = new Vehicle\Bicycle('white', 1);
var_dump($bicycle->switchOn());
var_dump($bicycle->switchOff());
$bicycle->setCurrentSpeed(20);
var_dump($bicycle->switchOn());

$car = new Vehicle\Car('green', 5, 'electric');
var_dump($car->switchOn());
var_dump($car->switchOff());
