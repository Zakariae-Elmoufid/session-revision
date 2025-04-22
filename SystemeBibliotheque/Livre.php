<?php


class Livre {

    private $id ;
    private $titre ;
    private $auteur ;
    private $disponible ;

    public function __construct($id,$titre,$auteur,$disponible){
        $this->id = $id ;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->disponible = $disponible;
    }

    
    public function getId(){
        return $this->id;
    }


    public function getTitre(){
        return $this->titre;
    }

    public function getAuteur(){
        return $this->auteur;
    }

    public function getDesponible(){
        return $this->disponible;
    }

    public function setDesponible($disponible){
       $this->disponible = $disponible;
    }


}
