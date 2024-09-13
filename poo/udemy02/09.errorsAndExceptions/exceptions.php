<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <h2>Gestion des erreurs avec la classe Exception </h2><br><br>
    <p><strong>Le principe est simple : </strong></p>
    <ol>
        <li>Créer un nouvel objet de type Exception, c'est-à-dire à partir de la class native de php qui s'appelle Exception ; et ce à chaque fois qu'une erreur spécifique est détectée</li>
        <li>Dès que cette exception est lancée, l'execution du script est suspendue</li>
        <li>Php va chercher où dans le script, l'exception doit être attrapée</li>
    </ol><br><br>
    <p><strong>Il y aura donc 3 phases : </strong></p>
    <ol>
        <li>Définir quand un exception doit être lancée</li>
        <li>Essayer de trouver/attraper l'exception (grâce à try {} & catch {})</li>
        <li>Utiliser un bloc dans lequel un code peut être exécuté</li>
    </ol>

    <section class="exemple">
        <?php
            function calculerProduit($a, $b)
            {
                if(!is_numeric($a) || !is_numeric($b))
                {
                    throw new Exception("Attention, il faut que les deux paramètres soient des nombres");
                } else {
                    return $a * $b;
                }
            }

            try
            {
                echo calculerProduit(5,"coucou");
            }
            catch(Exception $e)
            {
                echo " - Message d'erreur : " . $e->getMessage();
                echo "<br> - Code d'erreur : " . $e->getCode();
                echo "<br> - URL d'erreur : " . $e->getFile();
                echo "<br> - Ligne d'erreur : " . $e->getLine();
            }

            echo "<br><br>Le script continue";
        ?>
    </exemple>
    
</body>
</html>