<?php

require __DIR__ . '/data.php';

?>

<?php

//foreach loop fetches the city values and fills an empty array
foreach ($teams as $key => $value) :

    $cityValues[] = $value['city'];

endforeach;

//array_unique removes duplicate values and fills a new empty array
$uniqueValues[] = array_unique($cityValues);

//new values are iterated and implode returns a string from the array elements
foreach ($uniqueValues as $uniqueValue) :

    $cityValue = implode(' ', $uniqueValue);

endforeach;
