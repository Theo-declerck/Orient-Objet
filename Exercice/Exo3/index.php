<?php

require_once "Exo3.php";

$produit = new Produit("Banane ", 0.50, 50000);
$produit->afficherInfos();
echo "<br>";
$produit->mettreAJourPrix(0.80);
echo "<br>";
$produit->ajouterStock(100);
echo "<br>";
$produit->vendreProduit(5000);
echo "<br>";
