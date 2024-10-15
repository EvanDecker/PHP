<?php
class Math {
  const add = '+';
  const subtract = '-';
  const multiply = '*';
  const divide = '/';

  private function doOperation($operationType, $arg1, $arg2, ...$args) {
    if($operationType === $this::add) {
      $total = $arg1 + $arg2;
      foreach($args as $arg) {
        $total += $arg;
      }
      return $total;
    }
    else if($operationType === $this::subtract) {
      $total = $arg1- $arg2;
      foreach($args as $arg) {
        $total -= $arg;
      }
      return $total;
    }
    else if($operationType === $this::multiply) {
      $total = $arg1 * $arg2;
      foreach($args as $arg) {
        $total *= $arg;
      }
      return $total;
    }
    else if($operationType === $this::divide) {
      $total = $arg1 / $arg2;
      foreach($args as $arg) {
        $total /= $arg;
      }
      return $total;
    }
  }

  public function add($arg1, $arg2, ...$args) {
    return $this->doOperation($this::add, $arg1, $arg2, ...$args);
  }

  public function subtract($arg1, $arg2, ...$args) {
    return $this->doOperation($this::subtract, $arg1, $arg2, ...$args);
  }

  public function multiply($arg1, $arg2, ...$args) {
    return $this->doOperation($this::multiply, $arg1, $arg2, ...$args);
  }

  public function divide($arg1, $arg2, ...$args) {
    return $this->doOperation($this::divide, $arg1, $arg2, ...$args);
  }
}
