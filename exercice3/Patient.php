<?php

class Patient {
    private $id;
    private $nom;

    public function __construct($id,$nom){
        $this->id = $id;
        $this->nom = $nom;
    }
    
    
    public function afficherInfo(){
        echo "le nom de patien est " .$this->nom ;
     }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }
}