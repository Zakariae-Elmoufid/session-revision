<?php 

require_once 'Salle.php';
class Reservation {

    private Salle $salle;
    private $date;
    private $heure;

    public function __construct(Salle $salle , $date , $heure){
        $this->salle = $salle;
        $this->date = $date;
        $this->heure = $heure;
     }
 
     public function afficherInfo(){
         echo "la salle ".$this->salle->afficherInfo() . "la date de reservation  ".$this->date ."--" .$this->heure;
     }

     public function getSalle(){
        return $this->salle;
     }

     public function getDate(){
        return $this->date;
     }

     public function getHeure(){
        return $this->heure;
     }
}