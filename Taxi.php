<?php

include ('Car.php');
/**
 * represents taxis
 */
class Taxi extends Car
{
  private $numberOfPassengers;
  private $passengerOn;         //identyfies if the taxi is free

  public function accelerate()
  {
    $this->accelerate = 'slow';

  }


  public function setNumberOfPassengers($numberOfPassengers)
  {
    $this->numberOfPassengers = $numberOfPassengers;
  }

  public function getNumberOfPassengers()
  {
    return $this->numberOfPassengers;
  }

  public function setPassengersOn($passengerOn)
  {
   $this->passengerOn =  $passengerOn;
  }

  public function gerPassengersOn()
  {
    return $this->passengersOn;
  }


}


$taxi = new Taxi();
$taxi->setColour('black');
$taxi->setDoorNumber(4);
$taxi->setFuelType('Diesel');
$taxi->setNumberOfPassengers(2);
$taxi->setPassengersOn(true);
$taxi->accelerate();
echo "\n";
var_dump($taxi);


?>
