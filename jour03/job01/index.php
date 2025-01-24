<?php

    /* Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
Parcourez ce tableau et affichez “X est pair<br />” ou “X est impair<br/>”, 
X prenant tour à tour chacune des valeurs comprises dans ce tableau. */ 



$nombres =  array('200', '204', '173', '98', '171', '404', '459');
foreach($nombres as $nombre) {
    if($nombre %2 == 0) {
        echo "$nombre est pair <br>";
    }
    else {echo "$nombre est impair <br>";
    }
}