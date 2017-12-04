<?php 

require 'function.php';

class Task {
  public $description;

  public $completed = false;

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

$tasks = [
  new Task('Go to the store'),
  new Task('Finish my screencast'),
  new Task('Clean my room')
];

$tasks[0]->complete();


require 'index.view.php';