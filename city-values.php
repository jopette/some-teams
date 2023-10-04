<?php

require __DIR__ . '/data.php';

?>

<?php foreach ($teams as $key => $value) :

    echo $value['city'] . ' ';

endforeach;
