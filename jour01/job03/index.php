<?php
$bool = true;
$int = 42;
$float = 3.14;
$string = "Hello, World!";


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Variables</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
            font-family: Arial, Helvetica, sans-serif;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo gettype($bool); ?></td>
            <td>booléen</td>
            <td><?php echo $bool ? 'vrai' : 'faux'; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($int); ?></td>
            <td>entier</td>
            <td><?php echo $int; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($string); ?></td>
            <td>chaîne de caractères</td>
            <td><?php echo $string; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($float); ?></td>
            <td>flottant</td>
            <td><?php echo $float; ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>