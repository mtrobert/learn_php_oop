<?php

include ('Car.php');
/**
 * represents sport cars
 */
class Sport_car extends Car
{

  public function accelerate()
  {
    $this->accelerate = 'fast';
  }

}

$sport_car = new Sport_car();
$sport_car->setColour('red');
$sport_car->setDoorNumber(2);
$sport_car->setFuelType('Petrol');
$sport_car->accelerate();
echo "\n";
var_dump($sport_car);





?>
