<?php

use Classes\Bulldozer;
use Classes\Car;

$car = new Car('Porsche 911');
$bulldozer = new Bulldozer('Buldozer DOOSAN');

testDrive($car);
testDrive($bulldozer);