<?php
 
require_once "Livre.php";
require_once "BD.php";
require_once "Manga.php";
require_once "Roman.php";

class Bibliotheque {

    private $livres = [];
    
    public function ajouterLivre(Livre $livre){
        $this->livres[] = $livre;
    }

    public function afficherTousLesLivres(){
       foreach($this->livres as $livre){
        $livre->afficherInfos();
       }
    }
}