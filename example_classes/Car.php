<?php
 /**
  * represents generic properties and methods for any type of car
  */
abstract class Car
 {
   protected $colour, $doorNumber, $fuelType, $rightHandDrive, $accelerate;

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

   abstract protected function accelerate();

 }


?>
