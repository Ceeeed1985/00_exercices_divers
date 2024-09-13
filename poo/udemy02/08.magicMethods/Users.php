<?php

class Users
{
    public $name;
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

    //Méthode magique __cal()

    public function __call($method, $param)
    {
        echo 'La méthode <strong>< '. $method . ' ></strong> n\'est pas accessible ou n\'existe pas';
        echo '<br>';
        echo 'Arguments : ' . implode(', ', $param);
    }

    //Méthode magique __get()
    //Elle va s'executer si nous essayons d'accéder à un attribut qui n'existe pas, ou non accessible dans une classe
    public function __get($attribut)
    {
        echo "L'attribut <strong>< ". $attribut . " ></strong> auquel vous essayer d'accéder n'existe pas ou est inaccessible";
    }
 
    //Méthode magique __set()
    //Elle va s'executer si nous essayons de créer ou de mettre à jour un attribut qui n 'existe pas ou non accessible dans une classe;
    public function __set($attribut, $value)
    {
        echo "Impossible de mettre à jour l'attribut <strong>< " . $attribut . " ></strong> avec la valeur <strong>< " . $value . " ></strong>. <br>Attribut non accessible";
    }


    //Méthode magique __isset()
    //Elle va s'executer de manière automatique lorsque la fonction isset() est appelée sur des attributs qui sont inaccessibles ou inexistants
    public function __isset($attribut)
    {
        echo "L'attribut <strong>< " . $attribut . " ></strong> n'existe pas ou est inaccessible";
    }


   //Méthode magique __unset()
    public function __unset($attribut)
    {
        echo "L'attribut <strong>< " . $attribut . " ></strong> que vous voulez détruire n'existe pas ou est inaccessible";
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

