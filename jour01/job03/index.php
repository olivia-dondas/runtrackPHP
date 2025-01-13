<?php
$boolean = true;
$integer = 42;
$float = 3.14;
$string = "Hello, World!";

$variables = [
    ['type' => 'boolean', 'nom' => 'boolean', 'valeur' => $boolean ? 'true' : 'false'],
    ['type' => 'integer', 'nom' => 'integer', 'valeur' => $integer],
    ['type' => 'float', 'nom' => 'float', 'valeur' => $float],
    ['type' => 'string', 'nom' => 'string', 'valeur' => $string]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 03</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $var) : ?>
            <tr>
                <td><?= $var['type'] ?></td>
                <td><?= $var['nom'] ?></td>
                <td><?= $var['valeur'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
