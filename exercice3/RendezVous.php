<?php
require_once "Medecin.php";
require_once "Patient.php";
class RendezVous {
    private Medecin $medecin; 
    private Patient $patient;
    private  string $data;
    private  string $heure;
    
    public function __construct(Medecin $medecin , Patient $patient,string $data,$heure){
        $this->medecin = $medecin; 
        $this->patient = $patient; 
        $this->data = $data;
        $this->heure = $heure;
    }

    public function  afficherDetails(){
        echo $this->medecin->afficherInfo()."\n".$this->patient->afficherInfo();
    }

    public function getMedecin(){
        return $this->medecine;
    }

    public function getPatient(){
        return $this->patient;
    }

    public function getDate(){
        return $this->data;
    }

    public function getHeure(){
        return $this->heure;
    }

}