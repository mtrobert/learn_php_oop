<?php

/**
 *A file with simple example of 'messaging' concept in OOP.
 */



class Bussiness
{

  protected $staff;

  function __construct(Staff $staff)
  {
    $this->staff = $staff;
  }
  public function hire(Person $person)
  {
    $this->staff->add($person);           //sending a message to the Staff class that we want to add person to members
  }

  public function getStaffMembers()
  {
    return $this->staff->members();       //sending a message to the Staff class that we want the memmbers
  }

}

/**
 *
 */
class Staff
{

  protected $members = [];

  public function __construct($members =[])
  {
    $this->members = $members;
  }

  public function add(Person $person)
  {
    $this->members[] = $person;
  }

  public function members()
  {
    return $this->members;
  }

}

/**
 *
 */
class Person
{

  public $name, $profession ;

  function __construct($name = 'Robert', $profession = 'Butcher')
  {
    $this->name = $name;
    $this->profession = $profession;
  }
}

$person = new Person();
$staff = new Staff([$person]);
$b_and_b = new Bussiness($staff);
$person2 = new Person('Jonathan', 'Baker');
$b_and_b->hire($person2);
var_dump($b_and_b->getStaffMembers());


?>
