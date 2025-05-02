<?php


class Animal {

    protected $nom;
    protected $age;
    protected $type;

    private static $nombreAnimaux = 0;

    public function __construct($nom,$age,$type) {
        $this->nom = $nom;
        $this->age = $age;
        $this->type = $type;
        self::$nombreAnimaux++;
    }


    public static function  getNombreAnimaux(){
        return self::$nombreAnimaux;
    }
    

    public function getNom() {
        return $this->nom;
    }
    public function getAge() {
        return $this->age;
    }
    public function getType() {
        return $this->type;
    }
    public function sePresenter(){
        return "je suis un ".$this->type ." et je m'appelle ".$this->nom ." et j'ai ".$this->age." ans"; 
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }



}