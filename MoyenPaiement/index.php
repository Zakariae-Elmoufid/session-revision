<?php

require_once "Commande.php";
require_once "PaiementPaypal.php";
require_once "PaiementCrypto.php";
require_once "MoyenPaiement.php";

$commande = new Commande(150);

$paypal = new PaiementPaypal();
$commande->validerPaiement($paypal);

$crypto = new PaiementCrypto();
$commande->validerPaiement($crypto);


?>