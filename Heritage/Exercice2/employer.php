<?php
class Employe{
    protected string $nom;
    protected int $salaire;
    public function getNom(){return $this->nom;} 
    // accesseur
    public function getsalaire(){return $this->salaire;}

    public function __construct(string $nom, int $salaire){
        $this ->nom = $nom;
        $this ->salaire= $salaire;
    
    }
    public function afficherInfos()
    {
     
        echo " Nom : {$this -> nom} , Salaire : {$this->salaire} \n";
    }
}