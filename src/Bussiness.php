<?php
/**
 *
 */
class Bussiness
{

  protected $staff;

  function __construct(Staff $staff)
  {
    $this->staff = $staff;
  }
  public function hire(Employee $employee)
  {
    $this->staff->add($employee);           //sending a message to the Staff class that we want to add employee to members of staff
  }

  public function getStaffMembers()
  {
    return $this->staff->members();       //sending a message to the Staff class that we want the memmbers
  }

}


?>
