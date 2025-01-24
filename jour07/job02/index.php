<?php
// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser le cookie en le supprimant
    setcookie('nbvisites', '', time() - 3600); // Définir une expiration passée
    $nbvisites = 0; // Réinitialisation du compteur
} else {
    // Vérifier si le cookie "nbvisites" existe
    if (!isset($_COOKIE['nbvisites'])) {
        $nbvisites = 1; // Initialisation si le cookie n'existe pas
    } else {
        $nbvisites = $_COOKIE['nbvisites'] + 1; // Incrémentation si le cookie existe
    }
    // Mettre à jour le cookie
    setcookie('nbvisites', $nbvisites, time() + 3600 * 24); // Cookie valable 1 jour
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur avec Cookie</title>
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
    <h1>Compteur avec Cookie</h1>
    <div class="counter">
        Nombre de visites : <strong><?= htmlspecialchars($nbvisites) ?></strong>
    </div>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>
</html>