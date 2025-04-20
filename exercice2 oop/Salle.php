<?php 

class Salle {

    private $id;
    private $nom;
    private $capacite;


    public function __construct($id , $nom , $capacite){
       $this->id = $id;
       $this->nom = $nom;
       $this->capacite = $capacite;
    }

    public function afficherInfo(){
        echo "le nom de salle est ".$this->nom . "la catacite est ".$this->capacite;
    }

    public function getId(){
        return $this->id;
    }


}