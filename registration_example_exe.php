<?php
/**
 *executeable file for simple  registration process example
 */

use b_and_b\AuthController;


$registration = new RegisterUser();
$authController = new AuthController($registration);


$authController->register();

 ?>
