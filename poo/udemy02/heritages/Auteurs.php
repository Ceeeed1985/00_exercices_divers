<?php

class Auteurs extends Utilisateurs
{
    private $note;
    private $avis;

    public function __construct($nom, $prenom, $email, $note, $avis){
        Parent::__construct($nom, $prenom, $email);
        $this->setNote($note);
        $this->setAvis($avis);
    }


    public function afficherNom()
    {
        return $this->nom;
    }

    public function seConnecter(){
        echo "<br><br>Je suis ".$this->nom. " auteur sur votre site web, je peux donc me connecter";
    }

    //SETTERS

    public function setNote($note){
        $this->note = $note;
    }
    public function setAvis($avis){
        $this->avis = $avis;
    }
    public function setStatus($status){
        $this->status = $status;
    }


    //GETTERS

    public function getNote(){
        return $this->note;
    }

    public function getAvis(){
        return $this->avis;
    }
    public function getStatus(){
        return $this->status = "Auteur";
    }


}

