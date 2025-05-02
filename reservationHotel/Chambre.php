<?php

require_once "Reservable.php";


class Chambre  implements Reservable{

    private $numero ;
    private $type ;  //  "single", "double", "suite"
    private  $prixParNuit ;
    private $reservations = [];

    public function __construct($numero,$type,$prixParNuit ){
        $this->numero  = $numero;
        $this->type = $type;
        $this->prixParNuit  = $prixParNuit;
    }

    public function afficherInfo(){
         echo "le nomber de chamber est ".$this->numero." le type de chamber ".$this->type." le prex par la nuit est ".$this->prixParNuit;
    }


    public function ajouterReservation($dateDebut , $dateFin){
        $this->reservations[] = ['debut' => $dateDebut, 'fin' => $dateFin];
    }

    public function verifierDisponibilite( $dateDebut,  $dateFin){
          foreach($this->reservations as $res){
            if(!($dateFin <= $res['debut'] || $dateDebut >= $res['fin'])){
                return false;
            }
          }
          return true;
    }


    public function getNumero(){
        return $this->numero;
    }



}