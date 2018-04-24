<?php
/***************************************************************
                    FIRST INTERFACE EXAMPLE
***************************************************************/

interface Animal
{
  public function communicate();
}

/**
 *
 */
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
  // public function execute();
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

echo "\n" . '******************************' . "\n";


/***************************************************************
                    THIRD INTERFACE EXAMPLE
***************************************************************/


interface CanBeDriven
{
  public function drive();
}


  }


}





?>
