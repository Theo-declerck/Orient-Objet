<?php
require "compte.php";
require "client.php";
$compte1 = new Compte("1235", 1000);
$compte2 = new Compte("9999", 0);
$client1 = new Client("Jean.yves", [$compte1->getNumCompte(), $compte2->getNumCompte()], "",  0);
$compte3 = new Compte("5555", 0);
$compte4 = new Compte("7748", 0);
$client2 = new Client("Marie.Log", [$compte3->getNumCompte(), $compte4->getNumCompte()], "", 0);

while ($w = true) {

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
                    echo "Solde: " . $compte1->getSolde($compte1) . "€";
                    echo "\n------------------------\n";
                } elseif ($quelcompte == 2) {
                    echo "------------------------ \n";
                    echo "Numéro de compte  : " . $compte2->getNumCompte() . "\n";
                    echo "Solde: " . $compte2->getSolde($compte2) . "€";
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
                $quelcompte = readline(" De quel compte voulez vous retirer ? \n");
                $retrait = readline("Combien voulez vous retirer ? \n");
                if ($quelcompte == 1) {
                    if ($compte1->getSolde($compte1) >= $retrait) {
                        echo "------------------------ \n";
                        $compte1->retrait($retrait) . "€";
                        echo "\n------------------------\n";
                    } else {
                        echo "Vous n'avez pas assez d'argent sur votre compte \n";
                        echo "Solde actuel : " . $compte1->getSolde($compte1) . "€" . "\n";
                    }
                } elseif ($quelcompte == 2) {
                    if ($compte2->getSolde($compte2) >= $retrait) {
                        echo "------------------------ \n";
                        $compte2->retrait($retrait) . "€";
                        echo "\n------------------------\n";
                    } else {
                        echo "Vous n'avez pas assez d'argent sur votre compte \n";
                        echo "Solde actuel : " . $compte2->getSolde($compte2) . "€" . "\n";
                    }
                }
                break;
            case 4:
                echo "------------------------ \n";
                echo " \n Numéro de compte 1 : " . $compte1->getNumCompte() . "\n";
                echo " Numéro de compte 2 : " . $compte2->getNumCompte() . "\n";
                echo " \n------------------------\n";
                $quelcompte = readline(" Sur quel compte voulez vous versez ? \n");
                $vers = readline("Combien souhaitez vous versez ?");
                if ($quelcompte == 1) {
                    echo "------------------------ \n";
                    $compte1->versement($vers) . "€";
                    echo "Nouveau solde : " . $compte1->getSolde($compte1) . "€" . "\n";
                    echo "\n------------------------\n";
                } elseif ($quelcompte == 2) {
                    echo "------------------------ \n";
                    $compte2->versement($vers) . "€";
                    echo "Nouveau solde : " . $compte2->getSolde($compte2) . "€" . "\n";
                    echo "\n------------------------\n";
                }
                break;
            case 5:
                echo "------------------------ \n";
                echo " \n Numéro de compte 1 : " . $compte1->getNumCompte() . "\n";
                echo " Numéro de compte 2 : " . $compte2->getNumCompte() . "\n";
                echo " Compte Tiers : \n";
                echo " \n Numéro de compte 3 : " . $compte3->getNumCompte() . "\n";
                echo " Numéro de compte 4 : " . $compte4->getNumCompte() . "\n";
                echo " \n------------------------\n";
                $quelcompte = readline(" De quel compte voulez vous virez ? \n");
                $virement = readline("Combien souhaitez vous virer ?");
                $ousa = readline("Sur quelle compte souhaitez vous envoyez l'argent ?");
                if ($quelcompte == 1) {
                    if ($ousa == 1) {
                        echo "------------------------ \n";
                        echo "Opération impossible : Vous ne pouvez pas virer sur le même compte.\n";
                        echo "\n------------------------\n";
                    } elseif ($ousa == 2 && $compte1->getSolde($compte1) >= $virement) {
                        echo "------------------------ \n";
                        $compte1->virement($virement) . "€";
                        $compte2->versement($virement);
                        echo "Solde actuel du compte  " . $compte2->getNumCompte() . " : " . $compte2->getSolde($compte2) . "€" . "\n";
                        echo "\n------------------------\n";
                    } elseif ($ousa == 3 && $compte1->getSolde($compte1) >= $virement) {
                        echo "------------------------ \n";
                        $compte1->virement($virement) . "€";
                        $compte3->versement($virement);
                        echo "\n------------------------\n";
                    } elseif ($ousa == 4 && $compte1->getSolde($compte1) >= $virement) {
                        echo "------------------------ \n";
                        $compte1->virement($virement) . "€";
                        $compte4->versement($virement);
                        echo "\n------------------------\n";
                    } else {
                        echo " Votre solde n'est pas suffisant.\n";
                    }
                } elseif ($quelcompte == 2) {
                    if ($ousa == 1 && $compte2->getSolde($compte2) >= $virement) {
                        echo "------------------------ \n";
                        $compte2->virement($virement) . "€";
                        $compte1->versement($virement);
                        echo "Solde actuel du compte  " . $compte1->getNumCompte() . " : " . $compte1->getSolde($compte1) . "€" . "\n";
                        echo "\n------------------------\n";
                    } elseif ($ousa == 2) {
                        echo "------------------------ \n";
                        echo "Opération impossible : Vous ne pouvez pas virer sur le même compte.\n";
                        echo "\n------------------------\n";
                    } elseif ($ousa == 3 && $compte2->getSolde($compte2) >= $virement) {
                        echo "------------------------ \n";
                        $compte2->virement($virement) . "€";
                        $compte3->versement($virement);
                        echo "\n------------------------\n";
                    } elseif ($ousa == 4 && $compte2->getSolde($compte2) >= $virement) {
                        echo "------------------------ \n";
                        $compte2->virement($virement) . "€";
                        $compte4->versement($virement);
                        echo "\n------------------------\n";
                    } else {
                        echo " Votre solde n'est pas suffisant.\n";
                    }
                }
                break;
            case 6:
                break;
        }
    } elseif ($identité == 2) {
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
                        $client2->afficherInfos();
                        echo " \n------------------------ \n";
                        break;
        
        
                    case 2:
                        echo "------------------------ \n";
                        echo " \n Numéro de compte 1 : " . $compte3->getNumCompte() . "\n";
                        echo " Numéro de compte 2 : " . $compte4->getNumCompte() . "\n";
                        echo " \n------------------------\n";
                        $quelcompte = readline("Quel compte voulez voir regarder ? \n");
                        if ($quelcompte == 1) {
                            echo "------------------------ \n";
                            echo "Numéro de compte  : " . $compte3->getNumCompte() . "\n";
                            echo "Solde: " . $compte3->getSolde($compte3) . "€";
                            echo "\n------------------------\n";
                        } elseif ($quelcompte == 2) {
                            echo "------------------------ \n";
                            echo "Numéro de compte  : " . $compte4->getNumCompte() . "\n";
                            echo "Solde: " . $compte4->getSolde($compte4) . "€";
                            echo "\n------------------------\n";
                        } else {
                            echo " Ce compte n'existe pas";
                        }
                        break;
                    case 3:
                        echo "------------------------ \n";
                        echo " \n Numéro de compte 1 : " . $compte3->getNumCompte() . "\n";
                        echo " Numéro de compte 2 : " . $compte4->getNumCompte() . "\n";
                        echo " \n------------------------\n";
                        $quelcompte = readline(" De quel compte voulez vous retirer ? \n");
                        $retrait = readline("Combien voulez vous retirer ? \n");
                        if ($quelcompte == 1) {
                            if ($compte3->getSolde($compte3) >= $retrait) {
                                echo "------------------------ \n";
                                $compte3->retrait($retrait) . "€";
                                echo "\n------------------------\n";
                            } else {
                                echo "Vous n'avez pas assez d'argent sur votre compte \n";
                                echo "Solde actuel : " . $compte3->getSolde($compte3) . "€" . "\n";
                            }
                        } elseif ($quelcompte == 2) {
                            if ($compte4->getSolde($compte4) >= $retrait) {
                                echo "------------------------ \n";
                                $compte4->retrait($retrait) . "€";
                                echo "\n------------------------\n";
                            } else {
                                echo "Vous n'avez pas assez d'argent sur votre compte \n";
                                echo "Solde actuel : " . $compte4->getSolde($compte4) . "€" . "\n";
                            }
                        }
                        break;
                    case 4:
                        echo "------------------------ \n";
                        echo " \n Numéro de compte 1 : " . $compte3->getNumCompte() . "\n";
                        echo " Numéro de compte 2 : " . $compte4->getNumCompte() . "\n";
                        echo " \n------------------------\n";
                        $quelcompte = readline(" Sur quel compte voulez vous versez ? \n");
                        $vers = readline("Combien souhaitez vous versez ?");
                        if ($quelcompte == 1) {
                            echo "------------------------ \n";
                            $compte3->versement($vers) . "€";
                            echo "Nouveau solde : " . $compte3->getSolde($compte3) . "€" . "\n";
                            echo "\n------------------------\n";
                        } elseif ($quelcompte == 2) {
                            echo "------------------------ \n";
                            $compte4->versement($vers) . "€";
                            echo "Nouveau solde : " . $compte4->getSolde($compte4) . "€" . "\n";
                            echo "\n------------------------\n";
                        }
                        break;
                    case 5:
                        echo "------------------------ \n";
                        echo " \n Numéro de compte 1 : " . $compte3->getNumCompte() . "\n";
                        echo " Numéro de compte 2 : " . $compte4->getNumCompte() . "\n";
                        echo " Compte Tiers : \n";
                        echo " \n Numéro de compte 3 : " . $compte1->getNumCompte() . "\n";
                        echo " Numéro de compte 4 : " . $compte2->getNumCompte() . "\n";
                        echo " \n------------------------\n";
                        $quelcompte = readline(" De quel compte voulez vous virez ? \n");
                        $virement = readline("Combien souhaitez vous virer ?");
                        $ousa = readline("Sur quelle compte souhaitez vous envoyez l'argent ?");
                        if ($quelcompte == 1) {
                            if ($ousa == 1) {
                                echo "------------------------ \n";
                                echo "Opération impossible : Vous ne pouvez pas virer sur le même compte.\n";
                                echo "\n------------------------\n";
                            } elseif ($ousa == 2 && $compte3->getSolde($compte3) >= $virement) {
                                echo "------------------------ \n";
                                $compte3->virement($virement) . "€";
                                $compte4->versement($virement);
                                echo "Solde actuel du compte  " . $compte4->getNumCompte() . " : " . $compte4->getSolde($compte4) . "€" . "\n";
                                echo "\n------------------------\n";
                            } elseif ($ousa == 3 && $compte3->getSolde($compte3) >= $virement) {
                                echo "------------------------ \n";
                                $compte3->virement($virement) . "€";
                                $compte1->versement($virement);
                                echo "\n------------------------\n";
                            } elseif ($ousa == 4 && $compte3->getSolde($compte3) >= $virement) {
                                echo "------------------------ \n";
                                $compte3->virement($virement) . "€";
                                $compte2->versement($virement);
                                echo "\n------------------------\n";
                            } else {
                                echo " Votre solde n'est pas suffisant.\n";
                            }
                        } elseif ($quelcompte == 2) {
                            if ($ousa == 1 && $compte2->getSolde($compte2) >= $virement) {
                                echo "------------------------ \n";
                                $compte2->virement($virement) . "€";
                                $compte1->versement($virement);
                                echo "Solde actuel du compte  " . $compte1->getNumCompte() . " : " . $compte1->getSolde($compte1) . "€" . "\n";
                                echo "\n------------------------\n";
                            } elseif ($ousa == 2 ) {
                                echo "------------------------ \n";
                                echo "Opération impossible : Vous ne pouvez pas virer sur le même compte.\n";
                                echo "\n------------------------\n";
                            } elseif ($ousa == 3 && $compte2->getSolde($compte2) >= $virement) {
                                echo "------------------------ \n";
                                $compte2->virement($virement) . "€";
                                $compte3->versement($virement);
                                echo "\n------------------------\n";
                            } elseif ($ousa == 4 && $compte2->getSolde($compte2) >= $virement) {
                                echo "------------------------ \n";
                                $compte2->virement($virement) . "€";
                                $compte4->versement($virement);
                                echo "\n------------------------\n";
                            } else {
                                echo " Votre solde n'est pas suffisant.\n";
                            }
                        }
                        break;
                        case 6:
                }
            }
            else {
                echo " Réponse non valide";
            }
    }
     

