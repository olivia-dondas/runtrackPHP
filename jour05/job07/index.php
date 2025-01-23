<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Transformation de Chaîne</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        form {
            display: inline-block;
            margin-top: 20px;
        }
        input[type="text"] {
            width: 200px;
        }
        input[type="submit"] {
            margin-top: 10px;
        }
        .result {
            margin-top: 20px;
        }
        b {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Transformation de Chaîne</h1>
    <form action="" method="post">
        <label for="str">Chaîne de caractères :</label>
        <input type="text" id="str" name="str" required><br><br>
        <label for="transformation">Transformation :</label>
        <select id="transformation" name="transformation" required>
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select><br><br>
        <input type="submit" value="Appliquer">
    </form>

    <?php
    function gras($str) {
        return preg_replace_callback('/\b[A-Z][a-zA-Z]*\b/', function ($matches) {
            return '<b>' . $matches[0] . '</b>';
        }, $str);
    }

    function cesar($str, $decal = 2) {
        $result = '';
        $length = strlen($str);
        for ($i = 0; $i < $length; $i++) {
            $char = $str[$i];
            if (ctype_alpha($char)) {
                $ascii = ord($char);
                if (ctype_upper($char)) {
                    $ascii = (($ascii - ord('A') + $decal) % 26) + ord('A');
                } else {
                    $ascii = (($ascii - ord('a') + $decal) % 26) + ord('a');
                }
                $result .= chr($ascii);
            } else {
                $result .= $char;
            }
        }
        return $result;
    }

    function plateforme($str) {
        return preg_replace('/me\b/', 'me_', $str);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $str = $_POST['str'];
        $transformation = $_POST['transformation'];

        echo '<div class="result">';
        switch ($transformation) {
            case 'gras':
                echo gras($str);
                break;
            case 'cesar':
                echo cesar($str);
                break;
            case 'plateforme':
                echo plateforme($str);
                break;
            default:
                echo "Transformation inconnue.";
        }
        echo '</div>';
    }
    ?>
</body>
</html>
