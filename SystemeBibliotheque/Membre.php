<?php


class Membre {

    private $id ;
    private $nom ;
 

    public function __construct($id,$nom){
        $this->id = $id ;
        $this->nom = $nom;
    }


    public function getId(){
        return $this->id;
    }


    public function getnom(){
        return $this->nom;
    }


}
