<?php
 /**
  * represents generic properties and methods for any type of car
  */
 class Car
 {
   protected $colour, $doorNumber, $fuelType, $rightHandDrive;

   public function __construct($rightHandDrive = true)
   {
     $this->rightHandDrive = $rightHandDrive;
   }

   public function getColour()
   {
     return $this->colour;
   }

   public function setColour($colour)
   {
     $this->colour = $colour;
   }

   public function getDoorNumber()
   {
     return $this->doorNumber;
   }

   public function setDoorNumber($doorNumber)
   {
     $this->doorNumber = $doorNumber;
   }

   public function getFuelType()
   {
     return $this->fuelType;
   }

   public function setFuelType($fuelType)
   {
     $this->fuelType = $fuelType;
   }

   public function getRightHandDrive()
   {
     return $this->rightHandDrive;
   }

   public function setRightHandDrive($rightHandDrive)
   {
     $this->rightHandDrive = $rightHandDrive;
   }



 }


// echo (new Car())->getRightHandDrive();

$car = new Car(false);
var_dump($car);
$car->setRightHandDrive(true);
$car->setColour('Green');
$car->setFuelType('Petrol');
$car->setDoorNumber(2);
var_dump($car);












?>
