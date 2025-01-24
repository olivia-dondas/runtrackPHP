<?php
// Vérifier si l'utilisateur souhaite se déconnecter
if (isset($_POST['deco'])) {
    // Supprimer le cookie en le définissant avec une date d'expiration passée
    setcookie('prenom', '', time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']); // Redirection pour éviter la resoumission du formulaire
    exit;
}

// Vérifier si le formulaire de connexion a été soumis
if (isset($_POST['connexion']) && !empty(trim($_POST['prenom']))) {
    // Stocker le prénom dans un cookie pour 30 jours
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    setcookie('prenom', $prenom, time() + (30 * 24 * 60 * 60)); // Cookie valide 30 jours
    header("Location: " . $_SERVER['PHP_SELF']); // Redirection pour éviter la resoumission du formulaire
    exit;
}

// Récupérer le prénom depuis le cookie s'il existe
$prenom = isset($_COOKIE['prenom']) ? $_COOKIE['prenom'] : null;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            padding: 5px;
            font-size: 16px;
            width: 200px;
        }
        button {
            padding: 5px 15px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php if ($prenom): ?>
        <!-- Message de bienvenue et bouton déconnexion -->
        <h1>Bonjour <?= htmlspecialchars($prenom) ?> !</h1>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <!-- Formulaire de connexion -->
        <h1>Connexion</h1>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>