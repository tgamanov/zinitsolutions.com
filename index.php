<?php


require __DIR__ . '/vendor/autoload.php';

$Factory = new FactoryBuild();
$RobotOne = new RobotOne();
$RobotTwo = new RobotTwo();

$Factory->make($RobotOne, 10);
$Factory->getPower($RobotOne);      // Виводить 100

echo $Factory->getPower($RobotOne);
echo '<br>';

$Factory->turnOff($RobotOne, 2);
$Factory->getPower($RobotOne);
echo $Factory->getPower($RobotOne);
echo '<br>';

$Factory->make($RobotOne, 5);
$Factory->getPower($RobotOne);
echo $Factory->getPower($RobotOne);
echo '<br>';

//$Factory->turnOff( $RobotTwo, 2 );
$RobotTwo->setPowerRobot(15);
$Factory->make($RobotTwo, 2);
$Factory->getPower($RobotTwo);
echo $Factory->getPower($RobotTwo);
