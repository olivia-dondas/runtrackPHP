<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET - Nombre pair ou impair</title>
</head>
<body>
    <!-- Formulaire avec la méthode GET -->
    <form method="GET" action="">
        <!-- Champ pour saisir un nombre -->
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <!-- Bouton de soumission -->
        <button type="submit">Vérifier</button>
    </form>

    <?php
    // Vérification si un nombre a été soumis dans le formulaire
    if (isset($_GET['nombre'])) {
        // Récupération de la valeur du champ 'nombre'
        $nombre = $_GET['nombre'];

        // Vérification si la valeur saisie est un entier
        if (is_numeric($nombre) && (int)$nombre == $nombre) {
            // Vérification si le nombre est pair ou impair
            if ($nombre % 2 == 0) {
                echo "<p>Nombre pair</p>";
            } else {
                echo "<p>Nombre impair</p>";
            }
        } else {
            // Message d'erreur si la saisie n'est pas un nombre entier
            echo "<p>Veuillez entrer un nombre entier valide.</p>";
        }
    }
    ?>
</body>
</html>


<br
Pourquoi utiliser la méthode GET ?
	•	La méthode GET est appropriée lorsque les données saisies ne sont pas sensibles, 
        comme ici avec un simple nombre.

	•	Les données soumises via GET apparaissent dans l’URL sous forme de chaîne de requête 
        (?nombre=valeur), ce qui permet de :
	    •	Tester plus facilement avec des URLs directes.
	    •	Partager l’URL avec d’autres (par exemple : example.com?nombre=10).

	•	GET est également plus rapide pour des requêtes simples comme celle-ci, 
        puisqu’il n’implique pas l’envoi des données dans le corps de la requête 
        (comme avec POST).