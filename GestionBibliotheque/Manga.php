<?php 

// require_once "Livre.php";

class Manga extends Livre {

    private $nombreChapitres;


  
    public function __construct($titre, $auteur, $anneePublication,$nombreChapitres){
      parent::__construct($titre, $auteur, $anneePublication);
      $this->nombreChapitres = $nombreChapitres;
    }

    public function  afficherInfos(){
        echo "--titre : ".$this->titre."\n";
        echo "--auteur : ".$this->auteur."\n";
        echo "--anneePublication : ".$this->anneePublication."\n \n";
    }

}