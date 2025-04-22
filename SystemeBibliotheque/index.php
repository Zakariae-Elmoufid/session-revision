<?php

require_once "Emprunt.php";
require_once "Membre.php";
require_once "Livre.php";
require_once "Bibliotheque.php";

$livre1 = new Livre(1,"atomic hubite","jaims clir",true);
$livre2 = new Livre(2,"java script","rrrrrrrr",true);

$member1 = new Membre(1,"simo");


$bibliotheque = new Bibliotheque();

$bibliotheque->ajouterLivre($livre1);
$bibliotheque->ajouterLivre($livre2);
$bibliotheque->ajouterMembre($member1);
// var_dump($bibliotheque);:

$bibliotheque->emprunterLivre(1,1,"12/10/2000");
$bibliotheque->afficherLivresDisponibles();