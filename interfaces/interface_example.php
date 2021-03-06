<?php
/***************************************************************
                    FIRST INTERFACE EXAMPLE
***************************************************************/

interface Animal
{

  public function communicate();

}

class Dog implements Animal
{

  public function communicate()
  {
    return 'Bark';
  }

}

class Cat implements Animal
{

  public function communicate()
  {
    return 'Meow';
  }

}

echo "\n" . ((new Dog())->communicate());
echo "\n" . ((new Cat())->communicate()) . "\n";
echo "\n" . '******************************' . "\n" . "\n";


/***************************************************************
                    SECOND INTERFACE EXAMPLE
***************************************************************/

interface Logger
{

   public function execute($message);

}

class LogToFile implements Logger
{

  public function execute($message)
  {
    var_dump('Log to a file -> ' . $message);
  }

}

class LogToDatabase implements Logger
{

  public function execute($message)
  {
    var_dump('Log to a database -> ' . $message);
  }

}

class UsersController
{

  protected $logger;

  public function __construct(Logger $logger)       //coding to the interface not to the implementation,
  {                                                 // so the class does not to be change later in the lifcycle
      $this->logger = $logger;
  }

  public function show($user)
  {
    $user = $user;
    $this->logger->execute($user);
  }

}


$userController = new UsersController(new LogToFile);             // we only change the argument where it needs changing
$userController->show('Robert Marczak');

$userController = new UsersController(new LogToDatabase);         // we only change the argument where it needs changing
$userController->show('Marcelo Garcia');

echo "\n" . '******************************' . "\n" . "\n";


/***************************************************************
                    THIRD INTERFACE EXAMPLE
***************************************************************/


interface CanBeDriven
{

  public function drive($driversName);

}

class Car implements CanBeDriven
{

  protected $driver;

  public function drive($driversName)
  {
    $this->driver = $driversName;
    var_dump('I am a car. ' . $this->driver . ' drives me normally.');
  }

}

class SportCar implements CanBeDriven
{

  protected $driver;

  public function drive($driversName)
  {
    $this->driver = $driversName;
    var_dump('I am a Sportcar. ' . $this->driver . ' drives me fast.');
  }

}

class Tractor implements CanBeDriven
{

  protected $driver;

  public function drive($driversName)
  {
    $this->driver = $driversName;
    var_dump('I am a tractor. ' . $this->driver . ' uses me to plow the field.');
  }

}

/**
 *
 */
class Vehicle
{

  protected $vehicle;

  function __construct(CanBeDriven $vehicle)
  {
    $this->vehicle = $vehicle;
  }

  public function move($operator)
  {
      $this->vehicle->drive($operator);
  }

}


$vehicle1 = new Vehicle(new Car());
$vehicle2 = new Vehicle(new SportCar());
$vehicle3 = new Vehicle(new Tractor());
$vehicle1->move('Jonathan Smiley');
$vehicle2->move('Robert Marczak');
$vehicle3->move('Marcelo Garcia');



?>
