<?php

require_once "Exo.php";
$voiture = new Voiture("Toyota","MR2",2000,"Rouge",100);
echo"Marque : " . $voiture ->getMarque()."<br>";
echo"Modèle : " . $voiture ->getModele()."<br>";
echo"Année: " . $voiture ->getAnnee()."<br>";
echo"Couleur : " . $voiture ->getCouleur()."<br>";
echo"Vitesse actuelle : " . $voiture ->getvitesseatuelle()."<br>";
echo  $voiture ->  accelerer(50);
$voiture ->setCouleur("Bleue");