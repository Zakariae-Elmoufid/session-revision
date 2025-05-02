<?php 

// require_once "Livre.php";


class Roman extends Livre {

    public function  afficherInfos(){
        echo "--titre : ".$this->titre."\n";
        echo "--auteur : ".$this->auteur."\n";
        echo "--anneePublication : ".$this->anneePublication."\n \n";
    }

    
}