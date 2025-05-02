<?php
require_once 'Animal.php';
require_once 'Lion.php';    
require_once 'Singe.php';

$lion = new Lion("Simba", 5);
$singe = new Singe("George", 3);

$animal = new Animal("Bambi", 2, "Cerf");
$animal2 = new Animal("Bambi", 2, "Cerf");  

echo $lion->sePresenter() ."\n";

echo Animal::getNombreAnimaux(); 