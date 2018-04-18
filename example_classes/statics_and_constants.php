<?php
/**
 * simple examples with statics and constants
 */
class Words
{

  public $words = [];

  public  function addWords(...$string)
  {
    $this->words = array_merge($this->words, $string);
  }

  public function getWords()
  {
    return $this->words;
  }

}

class StrAction
{

  public static function lowerCase($str)
  {
    if (is_array($str)) {

      $array = [];

      foreach ($str as $word) {

        $newWord = strtolower($word) . " ->lowercased from original " . $word;
        $array[] = $newWord;
      }

      return $array ;
    }else{
      return strtolower($str);
    }
  }

  public static function upperCase($str)
  {
    if (is_array($str)) {

      $array = [];

      foreach ($str as $word) {

        $newWord = strtoupper($word) . " ->uppercased from original " . $word;
        $array[] = $newWord;
      }

      return $array ;
    }else{
      return strtoupper($str);
    }
  }

}

$wordBank = new Words();
$wordBank->addWords('HELLO', 'Good Morning', 'alRight Mate');
var_dump($wordBank->words);

print_r(StrAction::upperCase($wordBank->getWords()));
print_r(StrAction::lowerCase($wordBank->getWords()));



?>
