<?php

$two = 2;
$three = 3;
$four = 4;
$five = 5;
//
function add($num1, $num2) {
  return $num1 + $num2;
}

echo add(1, 3) . "\n";
echo add($three, $five) . "\n";
//
function subtract($num1, $num2) {
  return $num1 - $num2;
}

echo subtract(5, 1) . "\n";
echo subtract($four, $two) . "\n";
//
function multiply($num1, $num2) {
  return $num1 * $num2;
}

echo multiply(3, 3) . "\n";
echo multiply($five, $three) . "\n";
//
function divide($num1, $num2) {
  return $num1 / $num2;
}

echo divide(5, 1) . "\n";
echo divide($four, $two) . "\n";
//
function compare($com1, $com2, $bool = false) {
  $equal = true;
  if($bool) {
    gettype($com1) !== (gettype($com2)) ? $equal = false : '';
  }
  strval($com1) !== strval($com2) ? $equal = false : '';
  echo $equal ? "true\n" : "false\n";
}

compare(4, "4") . "\n";
compare(5, "5", true) . "\n";
compare(4, 4.0) . "\n";
compare(5, 5.0, true) . "\n";