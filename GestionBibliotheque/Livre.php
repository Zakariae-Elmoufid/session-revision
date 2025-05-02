<?php


abstract class Livre {

    protected $titre;
    protected $auteur;
    protected $anneePublication;

    public function __construct($titre,$auteur,$anneePublication){
         $this->titre = $titre;
         $this->auteur = $auteur;
         $this->anneePublication = $anneePublication;
    }

    
    abstract public  function afficherInfos();


}