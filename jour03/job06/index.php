<?php 
$str = "Les choses que l'on possède finissent par nous posséder";

echo strrev("$str");


//DEUXIEME METHODE AVEC BOUCLE


$str = "Les choses que l'on possède finissent par nous posséder";
$reversed = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reversed .= $str[$i];
}

echo $reversed;
?>