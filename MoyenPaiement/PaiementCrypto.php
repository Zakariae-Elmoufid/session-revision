<?php

require_once "MoyenPaiement.php";

class PaiementCrypto implements MoyenPaiement {
   
       	  public function payer(float $montant): bool{
    	    if($montant < 50){
    	      return false;
    	    }
    	    return true;
    	  }
}

?>