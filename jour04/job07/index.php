<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison ASCII Art</title>
</head>
<body>
    <form method="POST" action="">
        <label for="largeur">Largeur :</label>
        <input type="number" id="largeur" name="largeur" required><br><br>

        <label for="hauteur">Hauteur :</label>
        <input type="number" id="hauteur" name="hauteur" required><br><br>

        <button type="submit">Dessiner la maison</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $largeur = (int)$_POST['largeur']; // Conversion explicite en entier
        $hauteur = (int)$_POST['hauteur']; // Conversion explicite en entier

        // Validation des entrées
        if ($largeur > 2 && $hauteur > 1) {
            echo "<pre>";

            // Partie toit (triangle avec barres obliques)
            for ($i = 1; $i <= $largeur; $i += 2) {
                $espaces = str_repeat(" ", intval(($largeur - $i) / 2)); // Espaces pour centrer
                $traits = str_repeat("_", $i);
                echo $espaces . "/" . $traits . "\\" . $espaces . "\n";
            }

            // Partie mur (rectangle)
            for ($j = 0; $j < $hauteur; $j++) {
                echo "|" . str_repeat(" ", $largeur) . "|\n"; // Ajustement pour aligner les murs
            }

            // Partie sol
            echo str_repeat("_", $largeur + 2) . "\n"; // Ligne horizontale sous la maison

            echo "</pre>";
        } else {
            echo "<p>La largeur doit être supérieure à 2 et la hauteur supérieure à 1 pour dessiner une maison.</p>";
        }
    }
    ?>
</body>
</html>