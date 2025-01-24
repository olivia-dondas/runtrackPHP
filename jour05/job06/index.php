<?php
function leetSpeak($str) {
    // Tableau de correspondances pour leet speak
    $leet = array(
        'A' => '4', 'a' => '4',
        'E' => '3', 'e' => '3',
        'I' => '1', 'i' => '1',
        'O' => '0', 'o' => '0',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7',
        'L' => '1', 'l' => '1'
    );

    // Remplacement des caractères par leur équivalent en leet speak
    $leetStr = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (array_key_exists($char, $leet)) {
            $leetStr .= $leet[$char];
        } else {
            $leetStr .= $char;
        }
    }

    return $leetStr;
}

// Exemple d'utilisation
$input = "Hello La Plateforme!";
echo leetSpeak($input);
?>
