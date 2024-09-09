<?php

declare(strict_types = 1);

class Utilisateur
{
    //on commence par les attributs
    private string $nom;
    private string $prenom;
    private int $age;
    private string $email;

    //on peut ensuite ajouter des méthodes
    private function seConnecter(){
        echo "Je suis inscrit sur votre site web, je peux donc me connecter";
    }

    public function seDeconnecter(){
        echo "J'ai le droit de me déconnecter à tout moment";
    }

    public function initialiserNom($nom){
        $this->nom = $nom;
    }

    public function recupererNom(){
        echo "Nom : " . $this->nom;
    }

    public function initialiser($nom, $prenom, $age, $email){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->email = $email;
    }

    public function recupererInfosUser(){
        return "$this->nom, $this->prenom, $this->age, $this->email";
    }
}


?>