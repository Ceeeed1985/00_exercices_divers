<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les spacenames</title>
</head>
<body>
    <?php
        use \App\etudiants\Personne as etudiantsPersonne;
        use \App\clients\Personne as clientsPersonne;

        require_once('clients/Personne.php');
        require_once('etudiants/Personne.php');

        $personne2 = new etudiantsPersonne('Ironman', 'tonystark@shield.com');
        $personne2->getInfoEtudiants();
        echo "<br><br>";
        $personne3 = new clientsPersonne(3250, "en ordre");
        $personne3->getInfoClient();




        //$personne1 = new Personne('Ironman', 'tonystark@shield.com');
        //Cette ligne donnera une fatal error, car php ne sait pas quelle classe "Personne" doit être utilisée
        //Pour éviter ces conflits, PHP offre la possibilité d'organiser nos classes dans des répertoires (dossiers) virtuels => namespace
    ?>
</body>
</html>


