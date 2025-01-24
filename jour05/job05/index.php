<?php
function occurrences($str, $char) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }
    return $count;
}

// Exemple d'utilisation
$str = "Bonjour";
$char = "o";
echo "Le caractère '$char' apparaît " . occurrences($str, $char) . " fois dans la chaîne '$str'.";
?>
