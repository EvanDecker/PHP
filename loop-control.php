<?php
$numbers = [];
for($x = 0; $x < 100; $x+=3) {
  $numbers[] = $x;
}

for($x = 0; $x < count($numbers); $x++) {
  if($numbers[$x] === 0) echo "First number\n";
  else if($numbers[$x] === 3) echo "Three\n";
  else if($numbers[$x] === 9) {
    for($x = 0; $x < 3; $x++) {
      echo "Nine\n";
    }
  }
  else if($numbers[$x] === 15) {
    for($x = 0; $x < 5; $x++) {
      echo "Fifteen\n";
    }
  }
  else if($numbers[$x] === 99) echo "Last number\n";
  else if($numbers[$x] % 7 === 0) echo "Sevens are lucky, this number has " . $numbers[$x] / 7 . "\n";
  else if($numbers[$x] % 10 === 0) echo "$numbers[$x] is a round number\n";
}