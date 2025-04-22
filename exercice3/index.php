<?php

require_once "Medecin.php";
require_once "Patient.php";
require_once "RendezVous.php";
require_once "SystemeRendezVous.php";

$doctor1 =  new Medecin(1,"Alaoui","dentist");
$doctor2 =  new Medecin(2,"Tazi","le coure");

$patient1 = new Patient(1,"simo");
$patient2 = new Patient(2,"ahmed");

$systemeRendezVous = new SystemeRendezVous();
$systemeRendezVous->ajouterMedecin($doctor1);
$systemeRendezVous->ajouterPatient($patient1);

$systemeRendezVous->prendreRendezVous(1,1,"23/12/2025","12:20");
$systemeRendezVous->afficherRendezVous();


