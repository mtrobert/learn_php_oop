<?php
/**
 *
 */

namespace b_and_b;

use b_and_b\personnel\Employee;

class Staff
{

  protected $members = [];

  public function __construct($members =[])
  {
    $this->members = $members;
  }

  public function add(Employee $employee)
  {
    $this->members[] = $employee;
  }

  public function members()
  {
    return $this->members;
  }

}


?>
