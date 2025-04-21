<?php

class Medecin {

    private $id;
    private $nom;
    private $specialite;

    public function __construct($id,$nom,$specialite){
        $this->id = $id;
        $this->nom = $nom;
        $this->specialite = $specialite;
    }

    public function afficherInfo(){
       echo "le nom de medecin est " .$this->nom . "il specialicte comme  ".$this->specialite;
    }

    
    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

}