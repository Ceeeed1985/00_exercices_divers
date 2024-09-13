<?php

class Users
{
    private $name;
    private $email;
    private $age;
    private $favoriteAnimal;
    private $nationality;

    public function __construct($name, $email, $age, $favoriteAnimal)
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setAge($age);
        $this->setFavoriteAnimal($favoriteAnimal);
    }

    //Méthode magiques

    public function __call($method, $param)
    {
        echo 'La méthode '. $method . ' n\'est pas accessible ou n\'existe pas';
        echo 'Arguments : ' . implode(', ', $param);
    }





    //Exercice 06 - boucle foreach - méthode pour afficher les infos d'un utilisateur 

    public function showUser()
    {
        foreach ($this as $attribute => $value) {
            echo $attribute . " : " . $value . "<br>";
        }
    }

    //SETTERS
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setFavoriteAnimal($favoriteAnimal)
    {
        $this->favoriteAnimal = $favoriteAnimal;
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }
}

