<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre d'arguments POST</title>
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
    if (!empty($_POST)) {
        // Filtrer uniquement les valeurs non vides
        $non_empty_arguments = array_filter($_POST, function ($value) {
            return !empty($value);
        });

        // Compter les arguments non vides
        $nombre_arguments = count($non_empty_arguments);

        echo "<p>Le nombre d'arguments non vides envoyés via POST est : $nombre_arguments</p>";
    } else {
        echo "<p>Aucun argument n'a été envoyé via POST.</p>";
    }
    ?>
</body>
</html>

<!-- 
Explications mises à jour :
1. FORMULAIRE HTML :
   - Trois champs nommés "arg1", "arg2" et "arg3" sont inclus.

2. PHP - AJUSTEMENT :
   - Utilisation de `array_filter()` pour supprimer les champs vides de `$_POST`.
   - Seuls les champs remplis par l'utilisateur seront comptés.

3. POUR TESTER :
   - Remplissez uniquement certains champs du formulaire, puis cliquez sur "Envoyer".
   - Observez que seuls les champs non vides sont comptés.

-->