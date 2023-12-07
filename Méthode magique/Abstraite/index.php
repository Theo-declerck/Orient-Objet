<?php
require_once "animal.php";
require_once "Lapin.php";
require_once "humain.php";
require_once "Chasseur.php";

$lapin1 = new Lapin(true, "Blanc", 4);
$chasseur1 = new Chasseur("Pompe", "Pierre");
$lapin1->creer();
usleep(500000);
$chasseur1->creer();
usleep(500000);
$lapin1->seNourrir();
usleep(500000);


while ($lapin1->getEnvie() == true) {
    $chasseur1->move();
    usleep(500000);
    $lapin1->crier();
    usleep(500000);
    $tir = $chasseur1->Chasser();


    if ($tir == 1 or $tir == 6) {
        echo "Le chasseur a tué le lapin avec succès... mais il n'y as pas grand chose a manger ce soir...\n";
        $lapin1->setEnvie(false);
    } else {
        $lapin1->fuir();
        usleep(500000);
    }
}
