<?php

require_once "MoyenPaiement.php";


class PaiementPaypal implements MoyenPaiement {
  
  
      	  public function payer(float $montant): bool{
    	    if($montant){
    	      return true;
    	    }
    	    return false;
    	  }
  
  
}

?>