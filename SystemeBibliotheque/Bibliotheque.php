<?php
require_once "Emprunt.php";
require_once "Membre.php";
require_once "Livre.php";

class Bibliotheque {

    private $livres = [];
    private $membres  = [];
    private $emprunts   = [];

    public function ajouterLivre(Livre $livre){
        $this->livres[] = $livre;
    }

    public function ajouterMembre(Membre $membre){
        $this->membres[] = $membre;
    }

    public function emprunterLivre($idLivre, $idMembre, $date){
        $livre = null;
        foreach($this->livres as $lev){
         if($lev->getId() == $idLivre){
            $livre = $lev;
            break;
         }
        }
        
        $membre = null; 
        foreach($this->membres as $me){
         if($me->getId() == $idMembre){
            $membre = $me;
            break;
         }
        }

        if(!$livre || !$membre){
            echo "liver ou member pas existe ";
            return ;
        }
        
        foreach($this->emprunts as $emp){
          if($emp->getLiver()->getId() == $idLivre &&
           $emp->getMembre()->getId() == $idMembre &&
           $emp->getDate() == $date
           ){
            echo "ce liver est déje emprunte ";
            return;
           }
        }
        $faireEmprunt = new Emprunt($livre,$membre,$date);
        $this->emprunts[] = $faireEmprunt;
        echo"emprunt add succeful";
        $livre->setDesponible(false);
    }


    public function afficherLivresDisponibles(){

        foreach($this->livres as $liv){
            if($liv->getDesponible() == true){
                echo "************** \n";
                echo "le nom de livre est ".$liv->getTitre()."\n";
                echo "crée par  ".$liv->getAuteur()."\n";
                echo "************** \n";
            }
        }
    }

    public function afficherEmprunts(){
        foreach($this->emprunts as $emp){
            echo "**************\n";
            echo $emp->getDate() . " \n";
            echo "**************\n";
        }
    }

}