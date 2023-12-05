<?php
class Personne
{
    public function __construct(public string $nom, public string $prenom)
    {
    }

    public function afficherInfos()
    {
        echo "Nom : {$this->nom}, Prénom : {$this->prenom}";
    }
}
