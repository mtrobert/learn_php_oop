<?php
/**
 *
 */

namespace b_and_b;

class Employee
{

  protected $name, $profession ;

  function __construct($name = 'Robert', $profession = 'Butcher')
  {
    $this->name = $name;
    $this->profession = $profession;
  }
}


?>
