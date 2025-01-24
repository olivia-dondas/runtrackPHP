<?php
$str = "I'm sorrry Dave I'm Afraid I can't do that";

$voyelles = array('a', 'e', 'i', 'o', 'u', 'y');

for ($i = 0; $i < strlen($str); $i++) {
    if (in_array(strtolower($str[$i]), $voyelles)) {
        echo $str[$i];
    }
}

?>

// DIFFERENTE METHODE = MEME RESULTAT

<?php
$str = "I'm sorry Dave I'm afraid I can't do that";

$voyelle = ['a', 'e', 'i', 'o', 'u', 'i', 'o', 'u', 'y'];

for ($i = 0; $i < strlen($str); $i++) {
        if(in_array(strtolower($str[$i]),$voyelle)) {
            echo $str[$i];
        }
    } 
?>
