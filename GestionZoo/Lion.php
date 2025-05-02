<?php 

class Lion extends Animal {

    public function __construct($name,$age) {
        parent::__construct($name,$age,"Lion");
    }
    
    public function rugir() {
        echo "$this->nom rugit fort ! 🦁\n";
    }
    
    

   
}    