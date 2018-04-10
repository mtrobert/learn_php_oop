<?php
 /**
  * getters and setters examples
  */
 class Person
 {
   public $name, $age;


   function __construct($name, $age)
   {
    $this->name = $name;
    $this->age = $age;
   }

  public function setName($name)
  {
   $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }


   public function setAge($age)
   {
     $this->age = $age;
   }

   public function getAge()
   {
     return $this->age;
   }

   public function ageValidation()
   {
     if($this->age >= 18){
       echo "Welcome " . $this->name . ".";
     }else {
       echo $this->name . " ,you need to be 18 or over to access content.";
     }
   }

 }

$person = new Person("Ian Stoney",46);
var_dump($person);

$person->setName("Johnathan Smiley");
$person->setAge(17);
var_dump($person);
$person->ageValidation();
echo "\n";

$person->setName("Robert Marczak");
$person->setAge(34);
var_dump($person);

?>
