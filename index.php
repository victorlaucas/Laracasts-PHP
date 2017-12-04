<?php 

require 'Task.php';

// Try to connect to database
try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');  
} catch (PDOExeption $e) {
  die($e->getMessage());
}

// Prepare sql query 
$statement = $pdo->prepare('select * from todos');

// Execute sql query
$statement->execute();

// Fetch all results of this query 
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');



require 'index.view.php';
