<?php 
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "voyelles" => 0,
    "consonnes" => 0,
];

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]); // Convertir en minuscule pour éviter les erreurs
    if (ctype_alpha($char)) { // Vérifie si le caractère est une lettre
        if (in_array($char, $voyelles)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

echo "<table border='1' style='text-align: center; width: 50%; margin: auto;'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody>";
echo "<tr><td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td></tr>";
echo "</tbody>";
echo "</table>";
?>

DEUXIEME METHODE MÊME RÉSULTAT

<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

$dic = array(
    "consonne" => 0,
    "voyelle" => 0,
);

$voyelles = array("a", "e", "i", "o", "u", "y");

for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]);

    if (ctype_alpha($char));
        if (in_array($char, $voyelles)) {
            $dic["voyelle"]++;
        } else {
            $dic["consonne"]++;
        }
    }


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyelles & Consonnes</title>
</head>
<body>

    <table border ="1">
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic["voyelle"]; ?></td>
                <td><?php echo $dic["consonne"]; ?></td>
            </tr>
        </tbody>
    </table>

    
</body>
</html>






