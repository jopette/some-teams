<?php

require __DIR__ . '/data.php';

?>

<?php

$cityValues = [];

foreach ($teams as $key => $value) :

    $cityValues[] = $value['city'];

endforeach;

$uniqueValues[] = array_unique($cityValues);

foreach ($uniqueValues as $uniqueValue) :

    $cityValue = implode(' ', $uniqueValue);

endforeach;
