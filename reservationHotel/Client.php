<?php


class Client {

   private $id;
   private $nom;
   private $email;

    public function __construct($id,$nom,$email){
      $this->id = $id;
      $this->nom = $nom;
      $this->email  = $email;
    }

    public function afficherInfo(){
        echo "le nome de cline est ".$this->nom."\n";
        echo "l'address email est ".$this->email."\n";
    }

    public function getId(){
        return $this->id;
    }
}