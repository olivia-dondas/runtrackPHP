<?php
session_start();

// Réinitialisation de la partie
if (isset($_POST['reset'])) {
    unset($_SESSION['board']);
    unset($_SESSION['turn']);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Initialisation de la grille et du tour si non défini
if (!isset($_SESSION['board']) || !is_array($_SESSION['board'])) {
    $_SESSION['board'] = array_fill(0, 3, array_fill(0, 3, '-')); // Grille vide
    $_SESSION['turn'] = 'X'; // X commence
}

// Gestion du clic sur une case
if (isset($_POST['cell'])) {
    [$row, $col] = explode(',', $_POST['cell']);
    if ($_SESSION['board'][$row][$col] === '-') {
        $_SESSION['board'][$row][$col] = $_SESSION['turn'];
        $_SESSION['turn'] = $_SESSION['turn'] === 'X' ? 'O' : 'X'; // Changement de joueur
    }
}

// Vérification des conditions de victoire
function check_winner($board) {
    // Vérification des lignes, colonnes et diagonales
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] !== '-' && $board[$i][0] === $board[$i][1] && $board[$i][1] === $board[$i][2]) {
            return $board[$i][0];
        }
        if ($board[0][$i] !== '-' && $board[0][$i] === $board[1][$i] && $board[1][$i] === $board[2][$i]) {
            return $board[0][$i];
        }
    }
    if ($board[0][0] !== '-' && $board[0][0] === $board[1][1] && $board[1][1] === $board[2][2]) {
        return $board[0][0];
    }
    if ($board[0][2] !== '-' && $board[0][2] === $board[1][1] && $board[1][1] === $board[2][0]) {
        return $board[0][2];
    }
    return null;
}

// Vérifiez si un joueur a gagné
$winner = check_winner($_SESSION['board']);
if ($winner) {
    echo "<script>alert('$winner a gagné !');</script>";
    $_SESSION['board'] = array_fill(0, 3, array_fill(0, 3, '-')); // Réinitialiser la grille
    $_SESSION['turn'] = 'X'; // Réinitialiser le tour
} elseif (!in_array('-', array_merge(...$_SESSION['board']))) {
    echo "<script>alert('Match nul !');</script>";
    $_SESSION['board'] = array_fill(0, 3, array_fill(0, 3, '-')); // Réinitialiser la grille
    $_SESSION['turn'] = 'X'; // Réinitialiser le tour
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        table {
            margin: 20px auto;
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            border: 1px solid #000;
        }
        button {
            width: 100%;
            height: 100%;
            font-size: 20px;
            cursor: pointer;
        }
        .controls {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Jeu du Morpion</h1>
    <form method="post">
        <table>
            <?php foreach ($_SESSION['board'] as $rowIndex => $row): ?>
                <tr>
                    <?php foreach ($row as $colIndex => $cell): ?>
                        <td>
                            <?php if ($cell === '-'): ?>
                                <button type="submit" name="cell" value="<?= "$rowIndex,$colIndex" ?>">-</button>
                            <?php else: ?>
                                <?= htmlspecialchars($cell) ?>
                            <?php endif; ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="controls">
            <button type="submit" name="reset">Réinitialiser la partie</button>
        </div>
    </form>
</body>
</html>