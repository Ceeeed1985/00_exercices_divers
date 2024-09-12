<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions - Connexion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>

<?php
    require_once('SessionManager.php');
    require_once('User.php');

    SessionManager::startSession();
    if(isset($_POST['connexion'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email === 'john@gmail.com' && $password === 'password1234'){
            $user = new User($email);
            SessionManager::setUser($user);

            header('location: dashboard.php');
            exit();

        } else {
            $error = "Identifiant invalide";
        }
    }
    if (isset($error)){
        echo $error;
    }

?>

<form action="connexion.php" method="POST">
        <h2>Formulaire de connexion</h2>
        <label for="email">Email : </label>
        <input class="inputEmail" type="email" id="email" name="email" required>
        <br><br>
        <label for="password">Mot de passe : </label>
        <input class="inputPassword" type="password" id="password" name="password" required>
        <br><br>
        <input class="connectButton" type="submit" value="Se connecter" name="connexion">

    </form>
    
</body>
</html>