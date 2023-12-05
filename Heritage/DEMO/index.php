<?php
require_once "animal.php";
require_once "chien.php";

$animal = new Animal("Felix", 3);
$animal->afficherInfos();
echo "<br>";
$chien = new Chien("Max",2,"Labrador");
$chien -> afficherInfos();
$chien -> aboyer();