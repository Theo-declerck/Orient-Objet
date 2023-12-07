<?php
class Chasseur extends Humain{
    protected string $arme;

    public function __construct($arme,$nom)
    {
        parent::__construct($nom);  
        $this->arme=$arme;
    }

public function Chasser(){
    $chasse=rand(1,6);
    if ($chasse==1 or $chasse==6){
       echo "{$this->nom} tire sur le lapin avec son {$this->arme} est… le touche \n";
       
    }else{
        echo"{$this->nom} tire sur le lapin avec son {$this->arme} est… le rate \n";
    }
    return $chasse;
    
}
public function move(){
    echo "{$this->nom} avance avec son {$this->arme} \n";
}
public function creer(){
    echo "Le chasseur {$this->nom} avec son {$this->arme} a été créer. \n";
}
}