<?php

declare(strict_types = 1);

class Utilisateur
{
    //on commence par les attributs
    private string $nom;
    private string $prenom;
    private int $age;
    private string $email;

    public function __construct ($nom, $prenom, $email)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setEmail($email);
    }

    //on peut ensuite ajouter des méthodes
    public function seConnecter(){
        echo "Je suis inscrit sur votre site web, je peux donc me connecter";
    }

    public function seDeconnecter(){
        echo "J'ai le droit de me déconnecter à tout moment";
    }


    //setters pour mettre à jour l'attribut "nom"
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setAge($age)
    {
        if($age > 120 || $age < 1){
            throw new Exception ("L'âge doit être compris entre 1 et 120.");
        } else {
            $this->age = $age;

        }
    }

    private function setEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
        } else {
            throw new Exception ("Attention email non valide");
        }
        
    }

    //Getters pour récupérer les valeurs des attributs
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getEmail()
    {
        return $this->email;
    }


}


?>