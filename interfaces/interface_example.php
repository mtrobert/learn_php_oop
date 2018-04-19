<?php
/***************************************************************
                    FIRST INTERFACE EXAMPLE
***************************************************************/

interface Animal
{
  public function communicate($sound);
}

/**
 *
 */
class Dog implements Animal
{

  public function communicate($sound){
    return $sound;
  }

}

class Cat implements Animal
{

  public function communicate($sound){
    return $sound;
  }

}

echo "\n" . ((new Dog())->communicate('bark')) . '  -> first interface example' . "\n";
echo "\n" . ((new Cat())->communicate('meow')) . '  -> first interface example' . "\n";
echo "\n" . '******************************' . "\n";


/***************************************************************
                    SECOND INTERFACE EXAMPLE
***************************************************************/





?>
