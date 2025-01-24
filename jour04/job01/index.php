<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur d'arguments GET</title>
</head>
<body>
    <!-- Formulaire avec la méthode GET -->
    <form method="GET" action="">
        <label for="arg1">Argument 1 :</label>
        <input type="text" id="arg1" name="arg1"><br><br>

        <label for="arg2">Argument 2 :</label>
        <input type="text" id="arg2" name="arg2"><br><br>

        <label for="arg3">Argument 3 :</label>
        <input type="text" id="arg3" name="arg3"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
    // Vérifie si des arguments ont été passés via $_GET
    if (!empty($_GET)) {
        // Compte le nombre d'arguments dans $_GET
        $nombre_arguments = count($_GET);

        // Affiche le résultat
        echo "<p>Le nombre d'arguments GET est : $nombre_arguments</p>";

        // Affiche chaque argument et sa valeur pour plus de clarté
        echo "<ul>";
        foreach ($_GET as $cle => $valeur) {
            echo "<li><strong>$cle</strong> : $valeur</li>";
        }
        echo "</ul>";
    } else {
        // Message affiché lorsque aucun argument n'est passé
        echo "<p>Aucun argument n'a été passé via GET.</p>";
    }
    ?>
</body>
</html>

<!--
Explications :
	1.	Formulaire HTML :
	•	Trois champs (arg1, arg2, arg3) permettent de tester l’envoi de plusieurs arguments.
	•	La méthode GET est utilisée pour envoyer les données via l’URL.
	2.	Traitement PHP :
	•	La fonction count($_GET) est utilisée pour compter le nombre d’arguments reçus via $_GET.
	•	La boucle foreach affiche chaque clé (nom du champ) et sa valeur.
	•	Si aucun argument n’est passé, un message d’absence d’arguments est affiché.