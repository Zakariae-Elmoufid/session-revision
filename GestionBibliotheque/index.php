<?php

require_once "BD.php";
require_once "Manga.php";
require_once "Roman.php";
require_once "Bibliotheque.php";



// Titre: Naruto | Auteur: Masashi Kishimoto | Année: 1999 | Chapitres: 700
// Titre: Les Misérables | Auteur: Victor Hugo | Année: 1862
// Titre: Astérix | Auteur: René Goscinny | Année: 1959 | Illustrateur: Albert Uderzo


$naruto = new Manga("Naruto","Masashi Kishimoto",1999,700);

$miserables = new Roman("Les Misérables","Victor Hugo",1862);

$asterix = new BD("Astérix","René Goscinny",1959,"Albert Uderzo");

$bibliotheque = new Bibliotheque();

$bibliotheque->ajouterLivre($naruto);
$bibliotheque->ajouterLivre($miserables);
$bibliotheque->ajouterLivre($asterix);

$bibliotheque->afficherTousLesLivres();


 
