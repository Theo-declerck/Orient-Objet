<?php
require_once "class.php";
$employe1= new Employe("Marie",3000);
$employe2= new Employe("Jean",8000);
$employe3= new Employe("Paul",9000,);




echo $employe1 ."\n";
echo $employe2 . "\n";
echo $employe3. "\n";

$employe1-> augmenterSalaire(1.09);
echo "------------------------------ \n Nouveau salaire après augmentation \n";
echo $employe1;

// $attribut = $employe1->attribut; Afficher l'erreur de la méthode GET