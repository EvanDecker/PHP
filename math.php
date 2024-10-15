<?php
class Math {
  public function add(...$args) {
    $total = array_shift($args);
    foreach($args as $arg) {
      $total += $arg;
    }
    return $total;
  }

  public function subtract(...$args) {
    $total = array_shift($args);
    foreach($args as $arg) {
      $total -= $arg;
    }
    return $total;
  }

  public function multiply(...$args) {
    $total = array_shift($args);
    foreach($args as $arg) {
      $total *= $arg;
    }
    return $total;
  }

  public function divide(...$args) {
    $total = array_shift($args);
    foreach($args as $arg) {
      $total /= $arg;
    }
    return $total;
  }
}
