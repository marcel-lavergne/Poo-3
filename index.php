<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck('red',3, 'gasoline', 20);
$truck->setCapacity(30);
echo $truck->forward();
echo $truck->fullOrNot();
var_dump($truck);

$stalloneTruck = new Truck('black',3, 'gasoline', 50);
$stalloneTruck->setCapacity(10);
echo $stalloneTruck->forward();
echo $stalloneTruck->brake();
echo $stalloneTruck->fullOrNot();
var_dump($stalloneTruck);

$highRoad = new MotorWay();
$highRoad->addVehicle($truck);
var_dump($highRoad);

$mediumRoad = new ResidentialWay();
$mediumRoad->addVehicle($car);
var_dump($mediumRoad);

$smallRoad = new PedestrianWay();
$smallRoad->addVehicle($bicycle);
var_dump($smallRoad);