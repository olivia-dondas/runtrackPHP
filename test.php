<?php
$nombres = array(
    "numbers" => array(200, 204, 173, 98, 171, 404, 459)
);

foreach ($nombres['numbers'] as $value) {
    if ($value % 2 == 0) {
        // pair
        echo "$value est pair<br />";
    } else {
        // impair
        echo "$value est impair<br />";
    }
}
?>