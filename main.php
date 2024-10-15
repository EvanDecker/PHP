<?php

require('./constants.php');

$array = [ 'coolconst' => coolconst, 'prettygood' => prettygood, 'coolestconst' => coolestconst, 'bestnumber' => bestnumber ];

$result = (int) $array['bestnumber'] * $array['prettygood'];

echo "The result of $array[bestnumber] * $array[prettygood] is $result.";