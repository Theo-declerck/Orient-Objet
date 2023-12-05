<?php
class Animal{
    protected string $nom;
    protected int $age;


    public function __construct($nom, $age){
        $this -> nom = $nom;
        $this -> age = $age;
    }
    public function afficherInfos(){
        echo "Nom : {$this ->nom} <br>";
        echo "Age : {$this ->age} ans<br>";
    }
}
