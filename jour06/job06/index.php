<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changer le Style</title>
    <?php
        if (isset($_POST['style'])) {
            $style = $_POST['style'];
            echo '<link rel="stylesheet" type="text/css" href="' . $style . '.css">';
        } else {
            echo '<link rel="stylesheet" type="text/css" href="style1.css">'; // Par défaut, style1.css
        }
    ?>
</head>
<body>
    <h1>Changer le Style du Formulaire</h1>
    <form action="" method="post">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style" required>
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select><br><br>
        <input type="submit" value="Appliquer le style">
    </form>
</body>
</html>