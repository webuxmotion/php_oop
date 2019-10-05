<?php
//error_reporting(-1);

require_once 'classes/Car.php';

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();

echo Car::getCount();

$car2 = new Car();


echo $car1->getCarInfo();
echo $car2->getCarInfo();

echo $car2->getCount();
echo Car::getCount();

echo $car2->getPrototypeInfo();
echo Car::TEST_CAR_SPEED;

