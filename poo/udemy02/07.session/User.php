<?php

class User {

    private $email;

    public function __construct($email)
    {
        $this->setEmail($email);
    }

    //SETTER

    public function setEmail($email)
    {
        $this->email = $email;
    }

    //GETTER(afin de récupérer l'adresse email)

    public function getEmail()
    {
        return $this->email;
    }

}

