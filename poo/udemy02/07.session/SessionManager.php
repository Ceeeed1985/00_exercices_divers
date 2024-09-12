<?php

class SessionManager
{
    //On commence par une méthode pour démarrer la session, qui contient une fonction native de php : session_start()
    //Comme c'est une méthode static, elle pourra être appelée en dehors de la class sans avoir besoin d'instancier la class SessionManager
    public static function startSession()
    {
        session_start();
    }

    //méthode qui va permettre de garder l'information user tant que la session est ouverte
    public static function setUser(User $user)
    {
        $_SESSION['user'] = $user;
    }

    public static function getUser()
    {
        return $_SESSION['user'] ?? null;
    }

    public static function destroySession(){
        session_destroy();
    }

}



