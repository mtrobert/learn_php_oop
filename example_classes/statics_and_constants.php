<?php
/**
 * simple examples with statics and constants
 */
class Words
{

  public $words = [];

  public  function addWords(...$string)
  {
    $this->words[] = $string;
  }
}

$wordBank = new Words();
$wordBank->addWords('siemanko', 'siema', 'siemaneczko');
print_r($wordBank->words);










?>
