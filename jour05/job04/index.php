<?php
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Erreur : Division par zéro.";
            }
        case '%':
            if ($nombre2 != 0) {
                return $nombre1 % $nombre2;
            } else {
                return "Erreur : Division par zéro.";
            }
        default:
            return "Erreur : Opération invalide.";
    }
}

// Exemples d'appels de la fonction :
echo calcule(10, '+', 5); // Affiche 15
echo "\n";
echo calcule(10, '-', 5); // Affiche 5
echo "\n";
echo calcule(10, '*', 5); // Affiche 50
echo "\n";
echo calcule(10, '/', 5); // Affiche 2
echo "\n";
echo calcule(10, '%', 5); // Affiche 0
echo "\n";
echo calcule(10, '/', 2); // Affiche "Erreur : Division par zéro."
?>
