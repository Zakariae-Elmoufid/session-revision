<?php


require_once "Chambre.php";
require_once "Client.php";
require_once "SystemeReservation.php";

$systeme = new SystemeReservation();

$client = new Client(1, "Zakaria","zakaria@gmail.com");
$client2 = new Client(2, "Youssfe","youssfe@gmail.com");

$chambre = new Chambre(101, "Double", 500);
$chambre2 = new Chambre(101, "single", 500);

$systeme->ajouterClient($client);
$systeme->ajouterClient($client2);

$systeme->ajouterChambre($chambre);
$systeme->ajouterChambre($chambre2);

$systeme->reserver(1, 101, "2025-05-10", "2025-05-12");
$systeme->reserver(2, 101, "2025-05-11", "2025-05-13");

$systeme->afficherReservations();
