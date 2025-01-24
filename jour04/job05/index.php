<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>
    <!-- Formulaire de connexion -->
    <form method="POST" action="">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Se connecter</button>
    </form>

    <?php
    // Vérification après soumission du formulaire
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === "John" && $password === "Rambo") {
            echo "<p>c’est pas ma guerre</p>";
        } else {
            echo "<p>votre pire cauchemar</p>";
        }
    }
    ?>
</body>
</html>

<br
Explications :
	1.	Type de méthode : POST
	•	Le type POST est utilisé ici pour éviter que les données ne soient visibles dans l’URL, 
        ce qui améliore la confidentialité (contrairement à GET).
	•	En plus, POST permet de gérer des données volumineuses (comme des mots de passe ou des informations sensibles) 
        sans limitation de taille stricte.

	2.	Structure HTML :
	•	Le formulaire comprend deux champs : username pour le nom d’utilisateur et password pour le mot de passe.
	•	Le bouton de soumission envoie les données au serveur pour traitement.
    
	3.	Traitement des données en PHP :
	•	La condition if ($_SERVER['REQUEST_METHOD'] === 'POST') garantit que le traitement s’effectue uniquement 
        lorsque le formulaire est soumis.
	•	Les données envoyées via POST sont récupérées avec $_POST['champ'].
	•	Le script vérifie si les valeurs saisies correspondent à John et Rambo :
	•	Si oui : il affiche “c’est pas ma guerre”.
	•	Sinon : il affiche “votre pire cauchemar”.