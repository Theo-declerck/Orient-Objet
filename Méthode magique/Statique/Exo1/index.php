<?php
require_once "class.php";

$valeur1= new Utilitaire("indisponible.");


echo "L'information de Valeur 1 est ".$valeur1->getInformation() ."\n";
echo Utilitaire::addition(1,5)."\n";
echo Utilitaire::multiplication(7,4)."\n";
echo "Vous avez effectué ".Utilitaire::getTotalOperations()." Opération(s)"."\n";
