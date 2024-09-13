<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les exceptions et la gestion des erreurs en PHP</title>
</head>
<body>
    <?php

        echo "<h2>Gérer les erreurs avec la fonction die()</h2>";

        function calculerProduit($a, $b)
        {
            if(!is_numeric($a) || !is_numeric($b))
            {
                die("Attention : les deux paramètres doivent être des nombres");
            } else {
                return $a * $b;
            }
        }

        echo calculerProduit(5,"coucou");

        echo "Je fonctionne encore";


    ?>
</body>
</html>