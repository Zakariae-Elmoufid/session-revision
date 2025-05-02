<?php
	
	interface  MoyenPaiement {
	  public  function payer(float $montant): bool;
	}
	
?>