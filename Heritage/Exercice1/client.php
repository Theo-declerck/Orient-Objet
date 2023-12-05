<?php
class Client extends Compte{
    protected string $identifiant;
    protected array $compteliste;

    public function __construct(string $identifiant, array $compteliste, string $numcompte,float $solde){
    
    parent::__construct($numcompte,$solde);
    $this ->identifiant = $identifiant;
    $this ->compteliste= $compteliste;
    }
    public function afficherInfos()
    {
     
        echo " Identifiant : {$this -> identifiant} ";
    }
}