<?php
class Math {
  public function add($arg1, $arg2, ...$args) {
    $total = $arg1 + $arg2;
    foreach($args as $arg) {
      $total += $arg;
    }
    return $total;
  }

  public function subtract($arg1, $arg2, ...$args) {
    $total = $arg1- $arg2;
    foreach($args as $arg) {
      $total -= $arg;
    }
    return $total;
  }

  public function multiply($arg1, $arg2, ...$args) {
    $total = $arg1 * $arg2;
    foreach($args as $arg) {
      $total *= $arg;
    }
    return $total;
  }

  public function divide($arg1, $arg2, ...$args) {
    $total = $arg1 / $arg2;
    foreach($args as $arg) {
      $total /= $arg;
    }
    return $total;
  }
}
