<?php
require_once "employer.php";
require_once "manager.php";
$employe1=new Employe ("Alice",50000);
$employe2 =new Employe ("Jean",1);
$manager1=new Manager ("Bob",70000,[]);
$manager1 ->ajouterEmployer( $employe1);
$manager1 ->ajouterEmployer( $employe2);
$manager1 ->afficherInfos();