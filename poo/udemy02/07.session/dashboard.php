<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <?php

        require_once('SessionManager.php');
        require_once('User.php');

        SessionManager::startSession();
        $userFromSession = SessionManager::getUser();

        if($userFromSession){
            echo "Utilisateur connecté avec l'adresse : {$userFromSession->getEmail()}";
        } else {
            echo "Aucun utilisateur connecté";
        }
    ?>
</body>
</html>