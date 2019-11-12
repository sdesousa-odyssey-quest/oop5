<?php

require '../vendor/autoload.php';
require '../src/Interfaces/LightableInterface.php';

use App\Vehicle;

$car = new Vehicle\Car('white', 5, 'electric');

try {
    $car->start();
}catch (Exception $e) {
    echo 'Retirer le frein à main';
    echo '<br />';
    $car->setParkBrake();
}finally {
    echo 'Ma voiture roule comme un donut';
    echo '<br />';

}



