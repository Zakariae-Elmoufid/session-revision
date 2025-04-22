<?php
require_once "Membre.php";
require_once "Livre.php";

class Emprunt {
    private Livre $livre;
    private Membre $membre;
    private  $dateEmprunt;

    public function __construct(Livre $livre,Membre $membre,$dateEmprunt){
        $this->livre = $livre;
        $this->membre = $membre;
        $this->dateEmprunt = $dateEmprunt;
    }
    
    public function getLivre(){
        return $this->livre;
    }
    
    public function getMembre(){
        return $this->membre;
    }

    public function getDate(){
        return $this->dateEmprunt;
    }

}