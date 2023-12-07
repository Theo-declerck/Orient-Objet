<?php
class Lapin extends Animal{
    protected bool $envie=true;

    public function __construct($envie,$couleur,$nbpattes)
    {
     parent::__construct($couleur,$nbpattes);  
     $this->envie=$envie;
    }
    public function getEnvie(){return $this->envie;}
    public function setEnvie($x){$this->envie=$x;}

    public function seNourrir(){
        echo "Le lapin {$this->couleur} mange \n";
    }

    public function fuir(){
        echo "Le lapin {$this->couleur} s'enfuie sur ses {$this->nbpattes} d'un seul bond \n";
    }
    public function crier()
    {
       echo "Le lapin glapie de peur \n";
    }
    public function creer(){
        echo "Le lapin {$this->couleur} à {$this->nbpattes} pattes a été créer. \n";
    }
}