<?php

function conntectToDb(){
  try {
    return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');  
  } catch (PDOExeption $e) {
      die($e->getMessage());
  }
}

function fetchAllTasks($pdo){
  // Prepare sql query 
  $statement = $pdo->prepare('select * from todos');

  // Execute sql query
  $statement->execute();

  // Fetch all results of this query 
  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');  
}

function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}