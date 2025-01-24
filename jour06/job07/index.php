<?php
function bubblesort($tab, $croissant = true) {
    $n = count($tab);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($croissant) {
                if ($tab[$j] > $tab[$j + 1]) {
                    // Échanger les éléments pour un ordre croissant
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            } else {
                if ($tab[$j] < $tab[$j + 1]) {
                    // Échanger les éléments pour un ordre décroissant
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            }
        }
    }
    return $tab;
}

// Exemple d'utilisation
$tab = ["abc", "ghi", "def"];

// Tri par ordre croissant
$tab_croissant = bubblesort($tab, true);
echo "Tri par ordre croissant : " . implode(", ", $tab_croissant) . "\n";

// Tri par ordre décroissant
$tab_decroissant = bubblesort($tab, false);
echo "Tri par ordre décroissant : " . implode(", ", $tab_decroissant) . "\n";
?>
