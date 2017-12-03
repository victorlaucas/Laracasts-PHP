<?php 

class Task {

  protected $description;

  protected $completed = false;

  public function __contruct($description)

  {
    // Auto triggered on instantiation
    $this->description = $description;
  }

  public function complete()
  {
    $this->completed = true;
  }

  public function isComplete()
  
  {
    return $this->completed;
  }
}

$task = new Task('Go to the store');

$task-> complete;

var_dump($task->isComplete());

// require 'index.view.php';