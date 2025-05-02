<?php

require_once "Chambre.php";
require_once "Client.php";

class Reservation {

   private Client  $client ;
   private Chambre $chambre ;
   private $dateDebut;
   private $dateFin;

   public function __construct($client,$chambre,$dateDebut,$dateFin){
      $this->client = $client;
      $this->chambre = $chambre;
      $this->dateDebut = $dateDebut;
      $this->dateFin = $dateFin;
   }

   public function afficherDetails(){
      echo "************************\n";
      $this->client->afficherInfo();
      $this->chambre->afficherInfo();
      echo "la date de debut est  ".$this->dateDebut."__ la date de fin est ".$this->dateFin;
      echo "************************\n";
   }
}