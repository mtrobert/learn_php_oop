<?php
/**
 *executeable file for simple  registration process example
 */

use b_and_b\AuthController;
use b_and_b\RegisterUser;

$registration = new RegisterUser();
$authController = new AuthController($registration);


$authController->register();

 ?>
