
<?php
  

  require_once 'Salle.php';
  require_once 'Reservation.php';

class SystemeReservation {
    private $salles = [];
    private $reservations =[];

   public function  ajouterSalle(Salle $salle){
     $this->salles[] = $salle ;
   }

   public function  reserverSalle($idSalle, $date, $heure){
      $salle = null ;  
      foreach($this->salles as $sal){
        if($sal->getId() == $idSalle){
            $salle = $sal;
            break;
        }
      }
       
      if (!$salle) {
        echo "Salle introuvable.\n";
        return;
      }

    foreach($this->reservations as $res){
         if($res->getSalle()->id()  == $idSalle && $res->getDate() == $date && $res->getHeure()  == $heure){
            echo "Salle déjà réservée à cette date et heure.\n";
            return;
         }
         $reservation = new Reservation($salle, $date, $heure);
         $this->reservations[] = $reservation;
         echo "Réservation réussie !\n";
    }  
      
      
    }

    public function afficherSallesDisponibles($date, $heure) {
        foreach ($this->salles as $salle) {
            $estDisponible = true;
            foreach ($this->reservations as $res) {
                // if (
                //     $res->getSalle()->getId() === $salle->getId() &&
                //     $res->getDate() === $date &&
                //     $res->getHeure() === $heure
                // ) {
                //     $estDisponible = false;
                //     break;
                // }
            }
    
            // if ($estDisponible) {
            //     echo "Salle disponible : ";
            //     $salle->afficherInfo();
            //     echo "\n";
            // }
        }
    }



}