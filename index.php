<?php 

$person = [
  'age' => 20,

  'hair' => 'brown',

  'career' => 'Software Dev'
];

// Appending the array above
$person['name'] = 'Jeff';

// Remove item from array
unset($person['age']);

// How to print out array. Note that echo($person) would not run
var_dump($person);

// Using the die function will stop any other code below it from executing
die(var_dump($person));

require 'index.view.php';