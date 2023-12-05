<?php
class Voiture
{
    public function __construct(private string $marque, private string $modele, private int $annee, private string $couleur, private int $vitesseactuelle)
    {
    }
    public function getMarque(){return $this->marque;}
    public function getModele(){return $this->modele;}
    public function getAnnee(){return $this->annee;}
    public function getCouleur(){return $this->couleur;}
    public function getvitesseatuelle(){return $this->vitesseactuelle;}
    public function setMarque($marque){$this ->marque= $marque;}
    public function setModele($modele){$this ->modele= $modele;}
    public function setAnnee($annee){$this ->annee= $annee;}
    public function setCouleur($couleur){$this ->couleur= $couleur;}
    public function setvitesseatuelle($vitesseactuelle){$this ->vitesseactuelle= $vitesseactuelle;}
  
    public function afficherInfos()
    {
        echo "Marque : {$this->marque} <br> Modèle : {$this->modele} <br> Année : {$this->annee} <br> Couleur : {$this->couleur} <br> Vitesse Actuelle : {$this->vitesseactuelle} km/h";
    }
    public function accelerer($accel){
        $this-> vitesseactuelle += $accel;
        echo" Accelerer : {$this->vitesseactuelle } km/h";
    }
}
