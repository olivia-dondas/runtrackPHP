<?php
// Définir la chaîne initiale
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Créer une nouvelle chaîne vide pour stocker les caractères modifiés
$modified_str = "";

// Parcourir chaque caractère de la chaîne
for ($i = 1; $i < strlen($str); $i++) {
    $modified_str .= $str[$i];
}

// Ajouter le premier caractère de la chaîne originale à la fin
$modified_str .= $str[0];

// Afficher la chaîne modifiée
echo $modified_str;
?>
