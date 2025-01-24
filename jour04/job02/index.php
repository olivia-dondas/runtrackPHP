<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arguments GET dans un tableau</title>
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
    if (!empty($_GET)) {
        echo '<table>';
        echo '<thead>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';
        echo '</thead>';
        echo '<tbody>';

        // Parcours de chaque clé-valeur dans $_GET
        foreach ($_GET as $key => $value) {
            echo '<tr>';
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p style="text-align:center;">Aucun argument n\'a été passé via GET.</p>';
    }
    ?>
</body>
</html>

<!-- 
Explications du code :
1. FORMULAIRE HTML :
   - Crée un formulaire avec trois champs (arg1, arg2, arg3) que l'utilisateur peut remplir.
   - Les données sont envoyées avec la méthode GET (visibles dans l'URL après soumission).

2. PHP : 
   - Vérifie si le tableau $_GET n'est pas vide avec !empty($_GET).
   - Si $_GET contient des données, un tableau HTML est généré pour afficher les paires clé-valeur.

3. TABLEAU HTML :
   - Chaque clé (nom de l'argument) devient une cellule dans la première colonne.
   - Chaque valeur associée à la clé est affichée dans la seconde colonne.

4. BOUCLE FOREACH :
   - Parcourt les paires clé-valeur de $_GET.
   - Pour chaque paire, crée une nouvelle ligne (<tr>) dans le tableau avec deux cellules (<td>).

5. STYLE CSS :
   - Le tableau est stylisé pour être lisible : bordures, marges, alignement, et arrière-plan pour les en-têtes.

6. MESSAGE PAR DÉFAUT :
   - Si aucun argument n'est passé via $_GET, un message indique qu'il n'y a rien à afficher.
-->