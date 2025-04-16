<?php
	
	//interface 
	Interface ReservableInterface {


public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation;

}

// Vehicule



	abstract class Vehicule   {
  
   protected $id;
   protected $immatriculation;
   protected $marque;
   protected $modele;
   protected $prixJour; 
   protected $disponible;
   
   public function __construct($id=null,$immatriculation =null ,$marque=null,$modele=null,$prixJour=null ,$disponible = null ){
     $this->id = $id;
     $this->immatriculation = $immatriculation;
     $this->marque =  $marque;
     $this->modele = $modele;
     $this->prixJour = $prixJour;
     $this->disponible = $disponible;
   }
   
   abstract public function afficherDetails();
        
   
   
   public function calculerPrix(int $jours): float{
      return $this->prixJour * $jours;
   }
   
   public function estDisponible(): bool{
     if($this->disponible = 0 || $this->disponible = null){
       echo $this->marque."is unavailable";
     }else{
       echo $this->marque." is available";
     }
   }
   
   abstract public function  getType();
   
   public function getDisponible(){
     return $this->disponible;
   }


}



//Voiture

class Voiture extends Vehicule implements ReservableInterface  {
  
    public  $nbPortes;
    public  $transmission;
    
    public function __construct($id=null,$immatriculation,$marque,$modele,$prixJour,$disponible ,$nbPortes ,$transmission){
          parent::__construct($id=null,$immatriculation,$marque,$modele,$prixJour,$disponible);
          $this->nbPortes =$nbPortes;
          $this->transmission = $transmission; 
    }
    
    
    
    public function ReservableInterface($client,  $dateDebut,  $nbJours){
              new Reservation($this->getType(),$client, $dateDebut,$nbJours,$status = "");

    }
    
    
    public function afficherDetails(){
           echo 'id = '.$this->id .' immatriculation'.$this->immatriculation .'marque = '. $this->marque."modele".$this->modele;
    }
    
    public function getType(){
          return "Voiture";
    }

    
}


// Moto 
class Moto extends Vehicule implements ReservableInterface {
  
  
    public  $cylindree;
    
     public function __construct($id=null,$immatriculation,$marque,$modele,$prixJour,$disponible ,$cylindree ){
          parent::__construct($id=null,$immatriculation,$marque,$modele,$prixJour,$disponible);
          $this->$cylindree =$cylindree ;
    }
    
    
    
    public function ReservableInterface( $client,  $dateDebut,  $nbJours){
           new Reservation($this->getType(),$client, $dateDebut,$nbJours,$status = "");
    }
    
    public function afficherDetails(){
          echo 'id = '.$this->id .' immatriculation'.$this->immatriculation .'marque = '. $this->marque."modele".$this->modele;
    }
    
    public function getType(){
          return "Moto";
    }
    
}

//Camion 

class Camion extends Vehicule implements ReservableInterface{
  
    public  $capaciteTonnage;
    
     public function __construct($id=null,$immatriculation,$marque,$modele,$prixJour,$disponible ,$capaciteTonnage){
          parent::__construct($id=null,$immatriculation,$marque,$modele,$prixJour,$disponible);
          $this->capaciteTonnage = $capaciteTonnage ;
    }
    
    
    
      public function ReservableInterface( Cline $cline  , $dateDebut,  $nbJours){
           new Reservation($this->getType(),$client, $dateDebut,$nbJours,$status = "");
      }
    
    
    public function afficherDetails(){
          echo 'id = '.$this->id .' immatriculation'.$this->immatriculation .'marque = '. $this->marque."modele".$this->modele;
    }
    
    public function getType(){
        return "Camion";
    }
    
}


  // Personne 
	
	
abstract class  Personne {
  
  protected $firstName;
  protected $lastName;
  protected $email;
  
  public function __construct($firstName, $lastName, $email){
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->email = $email;
  }
  
  abstract public function  afficherProfil();

}

// Client 

class  Client extends  Personne {
  
 public $numberClient ; 
 public $reservations = []; 
 
 public function  __construct($firstName, $lastName, $email,$numberClient){
     parent::__construct($firstName, $lastName, $email);
     $this->numberClient = $numberClient;
     $this->reservations = $reservations;
  }
 
 public function addReservation(Reservation $r){
   $this->$reservations = $r;
 }
 
 public function  afficherProfil(){
      echo "name". $this->firstName . $this->lastName . "email".$this->email."number".  $this->numberClient ;
 }
 
 public function getHistorique() {
     
 }
 
 

}

// Agence

Class Agence {
  public $name ;
  public $city;
  public  $vehicles = []; 
  public  $clines= [];
  
  
  public function __construct($name,$city){
    $this->name = $name;
    $this->city = $city;
    // $this->vehicles = $vehicles;
    // $this->clines = $clines;
  } 
  
  public function addVehicule(Vehicule $v){
    $this->vehicles = $v;
  }
  
  public function searchVehiculeDisponible(string $type){
      $vehiculesDespo = [];
       foreach($this->$vehicles as $vehicle){
         if($vehicle->getType == $type && $vehicle->getDisponible() == 1 ){
            $vehiculesDespo [] = $vehicle;
         }
       }
       return $vehiculesDespo;
  }
  
  public function saveClient(Client $c) {
      $this->clines = $c;
  }
  
  public function makeReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours): Reservation
  {
      new Reservation($v,$client, $dateDebut,$nbJours,);
  }

  
}


// class Reservation 
class Reservation {
   public $vehicule;
   public $client;
   public $dateDebut;
   public $nbJours;
   public $statut ;
   
   public function __construct($vehicule ,$client , $dateDebut , $nbJours ){
   $this->vehicule  = $vehicule;
   $this->cline = $client;
   $this->dateDebut =  $dateDebut;
   $this->nbJours = $nbJours;
   $this->statut  = "pending" ;
   }
   
  public function  calculerMontant(){
    return $vehicule->calculerPrix($this->nbJours);
  }
  
  public function confirmer() {
    $this->statut = "accepte";
  }
  public function annuler(){
    
  }

}

$location1 = new Agence("tomobiltk" , "rabat");
$location2 = new Agence("carLoc" , "youssofia");


$toyota = new  Voiture(1,"A 15 456","toyota",2015,"350.00" ,1,2,"manual");
$casila = new  Moto(2,"A 17 32","casila",2020,"150.00" ,1,"cylindree");
$toyota = new  Voiture(3,"K 89 406","toyota",2005,"500.00" ,1,10,100);


$zakariae = new Client("zakariae","moufid","zakariae@gmail.com","0680060524");

$location1->saveClient($zakariae);
$location1->makeReservation($zakariae, $toyota, "16/04/2025" , 3 );


$vehicule = new  Vehicule();
echo $Vehicule->afficherDetails();

// $reservationZakaria =  new Reservation ($toyota ,$zakaria , "16/04/2025",3 )



	
?>