<?php

use Classes\Bulldozer;
use Classes\Car;

$car = new Car('Porsche 911', 'натуральная кожа');
$bulldozer = new Bulldozer('Buldozer DOOSAN', 'кожа nappa');

testDrive($car);
testDrive($bulldozer);