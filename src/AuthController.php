<?php
namespace b_and_b;
/**
 *
 */
class AuthController
{

  protected $registration;

  public function __construct(RegisterUser $registration)
  {
    $this->registration = $registration;
  }

  public function register()
  {
    $this->registration->execute();
  }

  public function userRegisteredSuccessfully()
  {
    var_dump('User registered  successfully.');
  }

  public function userRegistrationFailed()
  {
    var_dump('User registration failed.');
  }


}







 ?>
