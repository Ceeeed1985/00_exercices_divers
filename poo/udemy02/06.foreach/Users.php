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

