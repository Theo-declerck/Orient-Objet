<?php
class Chien extends Animal{
    protected string $race;

    public function __construct(string $nom, int $age,string $race){
    
    parent::__construct($nom,$age);
    $this ->race = $race;
    }

    public function aboyer(){
        echo "woof ! woof ! <br>";
    }
    public function afficherInfos()
    {
        parent::afficherInfos();
        echo " Race : {$this -> race} <br>";
    }
}