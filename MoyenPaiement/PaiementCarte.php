<?php

require_once "MoyenPaiement.php";


class PaiementCarte implements MoyenPaiement {
  
    	  public function payer(float $montant): bool{
    	    if($montant > 1000){
    	      return false;
    	    }
    	    return true;
        }
}
?>