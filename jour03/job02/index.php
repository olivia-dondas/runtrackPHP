<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";
for ($i = 0; $i < strlen($str); $i += 2) {
    echo $str[$i];
}

//Différente méthode même résultat




$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$rien = " ";
    for ($i = 0; $i < strlen($str); $i +=2) {
        $rien .= $str[$i];
    } 
echo $rien;


?>
