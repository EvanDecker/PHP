<?php

require('./constants.php');

$array = [ 'coolconst' => coolconst, 'prettygood' => prettygood, 'coolestconst' => coolestconst, 'bestnumber' => bestnumber ];

$result = (int) $array['bestnumber'] * $array['prettygood'];

echo "The result of " . $array['bestnumber'] . " * " . $array['prettygood'] . " is " . $result . ".";

$greg = 'greg';

$lorem = <<<END
    Lorem ipsum odor amet, consectetuer adipiscing elit. 
    $array[prettygood] class nibh mattis faucibus iaculis vehicula duis. 
    Aliquet ante consectetur mauris nostra; placerat bibendum egestas. 
    Varius semper proin leo aliquam senectus iaculis. 
    Eu hendrerit mi felis venenatis posuere. 
    Primis convallis sapien gravida at gravida fames et. 
    Ultrices fames ante semper viverra placerat magna. 
    Viverra tincidunt aliquet pellentesque; $array[coolestconst] mauris aenean. 
    Nunc ultrices lorem facilisi arcu consectetur nullam felis.

    Facilisis fermentum pellentesque amet erat maecenas lacinia ridiculus senectus phasellus? 
    Nunc conubia cras tortor nibh ridiculus himenaeos fermentum. 
    Justo congue cursus habitant habitasse nisl id risus. 
    Non neque duis $array[bestnumber] torquent nascetur amet viverra nunc. Netus viverra venenatis magna, massa sagittis turpis. 
    Cras nam pellentesque praesent; tempus euismod gravida. Lacus facilisi taciti fames nostra viverra sagittis cubilia donec. 
    Quis at orci eget proin id eu per.

    Imperdiet a aenean lobortis posuere pretium nulla in. 
    Urna $array[coolconst] nostra aenean natoque dictum facilisis felis sodales. 
    Fusce per proin ridiculus proin fermentum tincidunt. 
    Aliquet mattis condimentum cubilia eleifend ultricies. 
    Efficitur montes id parturient ac euismod cubilia metus. 
    Aliquam ut est nec luctus nulla. $greg habitant bibendum litora quam ipsum phasellus neque. 
    Torquent id mauris imperdiet porta quis feugiat fames. Purus purus vivamus dolor nullam convallis.';
END;
echo $lorem;