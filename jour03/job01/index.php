<?php

// Déclarer un tableau avec les nombres
$nombres = [200, 204, 173, 98, 171, 404, 459];

// Parcourir le tableau pour déterminer si chaque nombre est pair ou impair
foreach ($nombres as $nombre) {
    if ($nombre % 2 == 0) {
        // Nombre pair
        echo "$nombre est pair<br />";
    } else {
        // Nombre impair
        echo "$nombre est impair<br />";
    }
}
?>

<?php
$nombres = array(
    "numbers" => array(200, 204, 173, 98, 171, 404, 459)
);

foreach ($nombres['numbers'] as $value) {
    if ($value % 2 == 0) {
        // Nombre pair
        echo "$value est pair<br />";
    } else {
        // Nombre impair
        echo "$value est impair<br />";
    }
}
?>

