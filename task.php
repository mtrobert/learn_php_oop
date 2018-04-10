<?php
/**
 *  An example class 
 */
class Task
{
  public $seriesTitle, $name;
  public $completed = false;

  public function __construct($seriesTitle, $name)
  {
    $this->seriesTitle = $seriesTitle;
    $this->name = $name;

  }

  public function complete()
  {
    $this->completed = true;
  }

}

$task = new Task('Learning OOP','Robert Marczak');

var_dump($task->seriesTitle);

var_dump($task->name);

$task->complete();

var_dump($task->completed);

 ?>
