<?php
// Démarrage de la session
session_start();

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser la liste de prénoms en supprimant la variable de session
    unset($_SESSION['prenoms']);
} else if (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))) {
    // Récupérer le prénom soumis et le stocker dans la session
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = []; // Initialiser la liste si elle n'existe pas
    }
    $_SESSION['prenoms'][] = $prenom; // Ajouter le prénom à la liste
}

// Récupérer la liste des prénoms depuis la session
$prenoms = isset($_SESSION['prenoms']) ? $_SESSION['prenoms'] : [];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Prénoms</title>
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
        .list {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Liste des Prénoms</h1>

    <!-- Formulaire pour ajouter un prénom -->
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom" required>
        <button type="submit">Ajouter</button>
    </form>

    <!-- Formulaire pour réinitialiser la liste -->
    <form method="post">
        <button type="submit" name="reset">Réinitialiser la liste</button>
    </form>

    <!-- Affichage des prénoms -->
    <div class="list">
        <h2>Liste des prénoms :</h2>
        <?php if (!empty($prenoms)) : ?>
            <ul>
                <?php foreach ($prenoms as $prenom) : ?>
                    <li><?= htmlspecialchars($prenom) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p>Aucun prénom ajouté pour le moment.</p>
        <?php endif; ?>
    </div>
</body>
</html>