<?php
require "compte.php";
require "client.php";
$compte1 = new Compte("1235", 0);
$compte2 = new Compte("9999", 0);
$client1 = new Client("Jean.yves", [$compte1->getNumCompte(), $compte2->getNumCompte()], "",  0);
$compte3 = new Compte("5555", 0);
$compte4 = new Compte("7748", 0);
$client2 = new Client("Marie.Log", [$compte3->getNumCompte(), $compte4->getNumCompte()], "", 0);
while ($w = true) {
    $w = false;

    echo "*****************Bienvenue a la banque !***************** .\n";

    echo " 1 : Jean Yves. \n";
    echo " 2 : Marie Log. \n";
    $identité = readline("PTDR t'es qui ? \n");
    if ($identité = 1) {
        echo "\n
1 : Afficher mes informations. \n
2 : Afficher les informations de l'un de mes compte. \n
3 : Réaliser un retrait. \n
4 : Réaliser un versement. \n
5 : Réaliser un virement. \n
6 : Retour au choix du client.\n
0 :Quitter \n";

        $choix = readline("Que souhaité vous faire? \n");
        switch ($choix) {
            case 0:
                echo "Vous sortez de l'application.";
                exit;
            case 1:
                echo "------------------------ \n";
                $client1->afficherInfos();
                echo " \n------------------------ \n";
                break;


            case 2:
                echo "------------------------ \n";
                echo " \n Numéro de compte 1 : " . $compte1->getNumCompte() . "\n";
                echo " Numéro de compte 2 : " . $compte2->getNumCompte() . "\n";
                echo " \n------------------------\n";
                $quelcompte = readline("Quel compte voulez voir regarder ? \n");
                if ($quelcompte == 1) {
                    echo "------------------------ \n";
                    echo "Numéro de compte  : " . $compte1->getNumCompte() . "\n";
                    echo "Solde: " . $compte1->getSolde($compte1);
                    echo "\n------------------------\n";
                } elseif ($quelcompte == 2) {
                    echo "------------------------ \n";
                    echo "Numéro de compte  : " . $compte2->getNumCompte() . "\n";
                    echo "Solde: " . $compte2->getSolde($compte2);
                    echo "\n------------------------\n";
                } else {
                    echo " Ce compte n'existe pas";
                }
                break;
            case 3:
                echo "------------------------ \n";
                echo " \n Numéro de compte 1 : " . $compte1->getNumCompte() . "\n";
                echo " Numéro de compte 2 : " . $compte2->getNumCompte() . "\n";
                echo " \n------------------------\n";
                $quelcompte=readline(" De quel compte voulez vous retirer ? \n") ;
                if ($quelcompte == 1) {
                    echo "------------------------ \n";
                    echo "Numéro de compte  : " . $compte1->getNumCompte() . "\n";
                    echo "\n------------------------\n";
                } elseif ($quelcompte == 2) {
                    echo "------------------------ \n";
                    echo "Numéro de compte  : " . $compte2->getNumCompte() . "\n";
                    echo "\n------------------------\n";
                }
                $retrait=readline("Combien voulez vous retirer ? \n")

        }
    }
}

// elseif($identité =2){

// }
// else {
//     echo " Réponse non valide";
// }
