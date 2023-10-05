<?php

require __DIR__ . '/data.php';

?>

<?php

//fetches the city values and fills an empty array
foreach ($teams as $key => $value) :

    $cityValues[] = $value['city'];

endforeach;

//array_unique removes duplicate values and fills a new empty array
$uniqueValues[] = array_unique($cityValues);

//implode returns a string from the values so they can be printed
foreach ($uniqueValues as $uniqueValue) :

    $cityValue = implode(' ', $uniqueValue);

endforeach;
