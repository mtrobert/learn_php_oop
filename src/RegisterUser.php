<?php
namespace b_and_b;

/**
 *
 */
class RegisterUser
{

  public function execute(array $userData, $listener)         //user data could be an object or an array
  {                                                           //$listener reffers to the object it is called in ($this as an argument)
    var_dump('Registering user using the data provided.');


  }

}







 ?>
