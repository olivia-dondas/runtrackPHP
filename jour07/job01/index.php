<?php
// Démarrer la session
session_start();

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0; // Réinitialiser le compteur
} else {
    // Initialiser ou incrémenter le compteur
    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0; // Initialisation
    }
    $_SESSION['nbvisites']++; // Incrémenter le compteur
}

// Obtenir la valeur actuelle du compteur
$nbvisites = $_SESSION['nbvisites'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .counter {
            font-size: 24px;
            margin: 20px 0;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Compteur de Visites</h1>
    <div class="counter">
        Nombre de visites : <strong><?= htmlspecialchars($nbvisites) ?></strong>
    </div>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>
</html>