<?php
// require_once "Medecin.php";
// require_once "Patient.php";
require_once "RendezVous.php";

class  SystemeRendezVous {

    private  $medecins = []; 
    private  $patients = [];
    private  $rendezvous = [];

    public function ajouterMedecin($medecin){
        $this->medecins[] = $medecin;
    }

    public function ajouterPatient($patient){
        $this->patients[] = $patient;
    }

    public function prendreRendezVous($idMedecin, $idPatient, $date, $heure){
        $medecin = null ;
        foreach($this->medecins as $me){
            if($me->getId() == $idMedecin){
                $medecin = $me;
                break;
            }
        }

        $patient = null ;

        foreach($this->patients as $pa){
            if($pa->getId() ==  $idPatient){
                $patient = $pa;
                break;
            }
        }

        if (!$medecin || !$patient) {
            echo "Médecin ou patient introuvable.\n";
            return;
        }

        foreach($this->rendezvous as $re){
            if($re->getMedecin()->getId() == $idMedecin && $re->getDate() == $date && $re->getHeure() == $heure){
                echo "cette rendezVous remple entre d'autre date et heure ";
                return;
            }
        }  
        $nouveauRV =  new RendezVous($medecin,$patient,$date,$heure);
        $this->rendezvous[] = $nouveauRV;
        echo "Rendez-vous pris avec succès !\n";


    }

    public function afficherRendezVous(){
        foreach($this->rendezvous as $ren){
           echo "*************************************************\n";
           echo "----le medecine ".$ren->getMedecin()->getNom()."\n";
           echo "---le patient".$ren->getPatient()->getNom()."\n";
           echo "---le patient".$ren->getDate()."\n";
           echo "---le patient".$ren->getHeure()."\n";
           echo "*************************************************\n";
        }
    }


}