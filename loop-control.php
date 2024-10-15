<?php
$numbers = [];
for($x = 0; $x < 100; $x+=3) {
  $numbers[] = $x;
}

foreach($numbers as $number) {
  if($number === 0) echo "First number\n";
  else if($number === 3) echo "Three\n";
  else if($number === 9) {
    for($x = 0; $x < 3; $x++) {
      echo "Nine\n";
    }
  }
  else if($number === 15) {
    for($x = 0; $x < 5; $x++) {
      echo "Fifteen\n";
    }
  }
  else if($number === 99) echo "Last number\n";
  else if($number % 7 === 0) echo "Sevens are lucky, this number has " . $number / 7 . "\n";
  else if($number % 10 === 0) echo "$number is a round number\n";
}