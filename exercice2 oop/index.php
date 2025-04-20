<?php

require_once 'Salle.php';
require_once 'Reservation.php';
require_once 'SystemeReservation.php';


$salle1 =  new Salle(1,"younge coder", 20);
$salle2 =  new Salle(2,"breaking code", 8);



$systemeRes = new SystemeReservation();

$systemeRes->ajouterSalle($salle1);
$systemeRes->ajouterSalle($salle2);

$systemeRes->reserverSalle(1,"19/04/2025","12:00");

$systemeRes->afficherSallesDisponibles("19/04/2025", "12:00");

$systemeRes->getReservation();