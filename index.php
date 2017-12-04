<?php 

require 'function.php';

class Task {
  protected $description;

  protected $completed = false;

  public function __construct($description){
    // Auto triggered on instantiation 
    $this->description = $description;
  }

  public function isComplete(){
    return $this->completed;
  }

  public function complete(){
    $this->completed = true;
  }
}

$task = new Task('Go to the store');

$task->complete();

var_dump($task->isComplete());




// require 'index.view.php';