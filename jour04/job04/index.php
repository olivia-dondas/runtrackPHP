<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arguments POST dans un tableau</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <label for="arg1">Argument 1 :</label>
        <input type="text" id="arg1" name="arg1"><br><br>

        <label for="arg2">Argument 2 :</label>
        <input type="text" id="arg2" name="arg2"><br><br>

        <label for="arg3">Argument 3 :</label>
        <input type="text" id="arg3" name="arg3"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
    // Vérifie si $_POST n'est pas vide
    if (!empty($_POST)) {
        echo '<table>';
        echo '<thead>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';
        echo '</thead>';
        echo '<tbody>';

        // Parcours les arguments de $_POST
        foreach ($_POST as $key => $value) {
            echo '<tr>';
            echo "<td>$key</td>"; // Affiche la clé (nom de l'argument)
            echo "<td>$value</td>"; // Affiche la valeur associée
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        // Message si aucun argument n'est envoyé
        echo '<p style="text-align:center;">Aucun argument n\'a été passé via POST.</p>';
    }
    ?>
</body>
</html>

<!-- 
Explications du code :
1. FORMULAIRE HTML :
   - Le formulaire utilise la méthode POST pour envoyer les données.
   - Il contient trois champs (arg1, arg2, arg3) que l'utilisateur peut remplir.

2. PHP :
   - Vérifie si des données ont été envoyées via $_POST (avec !empty($_POST)).
   - Si des données existent, un tableau HTML est généré pour afficher les clés et leurs valeurs.

3. TABLEAU HTML :
   - Chaque clé de $_POST (nom de l'argument) est affichée dans une cellule de la première colonne.
   - Chaque valeur associée est affichée dans la cellule de la deuxième colonne.

4. BOUCLE FOREACH :
   - Parcourt les paires clé-valeur de $_POST et crée une ligne (<tr>) pour chaque paire.

5. MESSAGE PAR DÉFAUT :
   - Si aucune donnée n'est envoyée via POST, un message est affiché pour en informer l'utilisateur.

6. STYLE CSS :
   - Stylise le tableau pour une meilleure lisibilité : bordures, alignement, et couleur de fond des en-têtes.
-->