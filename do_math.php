<?php
require('math.php');

$Math = new Math;

betterEcho("Addition:");
betterEcho($Math->add(3, 4));
betterEcho($Math->add(5, 4, 3, 2, 1));
betterEcho($Math->add(1, 4, 5, 7, 9, 12));

betterEcho("Subtraction:");
betterEcho($Math->subtract(16, 4));
betterEcho($Math->subtract(50, 12, 5, 8, 2, 3, 5));
betterEcho($Math->subtract(6, 15));

betterEcho("Multiplication:");
betterEcho($Math->multiply(3, 6));
betterEcho($Math->multiply(3, 6, 5, 2));
betterEcho($Math->multiply(6, -15));

betterEcho("Division:");
betterEcho($Math->divide(20, 5));
betterEcho($Math->divide(50, 2, -5, 1));
betterEcho($Math->divide(20, 80));

//
function betterEcho($arg) {
  echo $arg;
  echo "\n";
}