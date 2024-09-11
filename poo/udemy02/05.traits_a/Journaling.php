<?php

trait Registration
{
    public function register($message)
    {
        echo "Inscription : " . $message;
    }
}

trait ConnexionStatus
{
    public function getConnexionStatus()
    {
        echo "Vous êtes connecté";
    }
}

