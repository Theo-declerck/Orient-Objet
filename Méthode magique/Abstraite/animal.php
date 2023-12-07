<?php
  class Animal {
    protected string $couleur;
    protected int $nbpattes;    

    public function __construct($couleur,$nbpattes)
    {
        $this->couleur=$couleur;
        $this->nbpattes=$nbpattes;
    }
    
    public function crier(){

    }
}