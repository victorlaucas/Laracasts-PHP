<?php 

require 'function.php';

require 'Task.php';

$pdo = conntectToDb();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';
