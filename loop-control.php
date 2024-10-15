<?php
$numbers = [];
for($x = 0; $x < 100; $x+=3) {
  $numbers[] = $x;
}

foreach($numbers as $number) {
  switch($number) {
    case 3:
      echo "Three";
      break;
    case 9:
      for($x = 0; $x < 3; $x++) {
        echo "Nine";
      }
      break;
    case 15:
      for($x = 0; $x < 5; $x++) {
        echo "Fifteen";
      }
      break;
  }
}