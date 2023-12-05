<?php 

require_once "Exo2.php";

$stagiaire = new Stagiaire ("Jean yves ",[7,8,5,6,4,1,2]);
$stagiaire -> afficherInfos(); 
echo"Nom : " . $stagiaire ->getNom()."<br>";

echo "<br>";
$stagiaire -> calculerMoy();
$stagiaire -> Max();
$stagiaire -> Min();

?>

