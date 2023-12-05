<?php
class Compte{
    protected string $numcompte;
    protected float $solde;
    public function getNumCompte(){return $this->numcompte;}
    public function getSolde(){return $this->solde;}

    public function __construct($numcompte, $solde){
        $this -> numcompte = $numcompte;
        $this -> solde = $solde;
    }
    public function afficherInfos(){
       
        echo "Solde : {$this ->solde} <br>";
    }
    public function versement($vers){
       $this -> solde +=$vers;
       echo "Vous avez versé".$vers;
       echo "Nouveau solde {$this -> solde}";
    }

    public function retrait($retrait){
        $this -> solde -= $retrait;
        echo "Vous avez retiré ".$retrait;
        echo "Nouveau solde {$this -> solde}";
    }
    public function virement($virement){
        $this -> solde -=$virement;
        echo "Vous avez viré ".$virement;
        echo "Nouveau solde {$this->solde}";
    }

}
