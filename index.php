<?php 

function agechecker($age) {
  if ($age >= 21) {
    echo "Welcome to the club";
  } else {
    echo "You are not old enough";
  }
}

agechecker(21);

require 'index.view.php';