<?php


require_once "Chambre.php";
require_once "Client.php";
require_once "Reservation.php";


class SystemeReservation   {

    private $chambres = [];
    private $clients = [];
    private $reservations  = [];

    public function ajouterChambre(Chambre $chambre) {
       $this->chambres[] = $chambre;
    } 
    
    public function  ajouterClient(Client $client){
        $this->clients[] =  $client;
    }

    public function reserver($idClient, $numeroChambre, $dateDebut, $dateFin){
         $cline = null ;
         foreach($this->clients as $clie){
            if($clie->getId() == $idClient){
                $cline = $clie;
                break;
            }
         }
        
         $chambre = null;

         foreach($this->chambres as $cham){
               if($cham->getNumero() == $numeroChambre){
                $chambre = $cham;
                break;
               }
         }
         
         if(!$cline || !$chambre){
            echo "cline ou chamber sont pas  exist";
            return;
         }
         if($chambre->verifierDisponibilite(  $dateDebut,   $dateFin)){
            $reservation = new Reservation($cline,$chambre,$dateDebut, $dateFin);
            $chambre->ajouterReservation($dateDebut , $dateFin);
            echo " Réservation réussie.<br>";
            $this->reservations[] = $reservation;
         }else{
            echo " Chambre non disponible pour ces dates.<br>";

         }

    }

    public function afficherReservations(){
         foreach($this->reservations as $reservation){
            $reservation->afficherDetails();
            
         }
    }

}