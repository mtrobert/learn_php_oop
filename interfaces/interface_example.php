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

  public function communicate(){
    return 'Bark';
  }

}

class Cat implements Animal
{

  public function communicate(){
    return 'Meow';
  }

}

echo "\n" . ((new Dog())->communicate()) . '  -> first interface example' . "\n";
echo "\n" . ((new Cat())->communicate()) . '  -> first interface example' . "\n";
echo "\n" . '******************************' . "\n";


/***************************************************************
                    SECOND INTERFACE EXAMPLE
***************************************************************/

interface Logger
{
  // public function execute();
}

class LogToFile
{
  public function execute($message){
    var_dump('Log to a file -> ' . $message);
  }
}

class LogToDatabase
{
  public function execute($message){
    var_dump('Log to a database -> ' . $message);
  }
}
?>
