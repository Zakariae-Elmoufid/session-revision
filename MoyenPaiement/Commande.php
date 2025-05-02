<?php
 
 require_once "MoyenPaiement.php";

 
class Commande{
  
  private $total;
  
  public function __construct($total){
      $this->total = $total;
  }
  
  public function validerPaiement(MoyenPaiement $paiement){
       if($paiement->payer( $this->total)){
         echo "la methofe payment est valider ";
       }else{
         echo "la methofe payment est refuse ";
       }
  }
}
?>