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
    $this->registration->execute([], $this);
  }

  public function userRegisteredSuccessfully()
  {
    var_dump('When the user was registered successfully we do something here ei. return a view.');
  }

  public function userRegistrationFailed()
  {
    var_dump('When the user registration failed we do something here ei. redirect to the form page.');
  }


}







 ?>
