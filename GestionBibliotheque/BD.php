<?php 

require_once "Livre.php";

class BD extends Livre {
    
    private  $illustrateur;
    
    
    public function __construct($titre, $auteur, $anneePublication, $illustrateur) {
        parent::__construct($titre, $auteur, $anneePublication);
        $this->illustrateur = $illustrateur;
    }
    public function  afficherInfos(){
        echo "--titre : ".$this->titre."\n";
        echo "--auteur : ".$this->auteur."\n";
        echo "--anneePublication : ".$this->anneePublication."\n \n";
    }


}