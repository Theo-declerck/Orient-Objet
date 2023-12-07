<?php

class Employe
{
    private string $nom;
    private int $salaire;

    public function __construct($nom, $salaire)
    {
        $this->nom = $nom;
        $this->salaire = $salaire;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        } else {
            trigger_error("l'Attribut $name n'existe pas", E_USER_ERROR);
        }
    }

   
    public function augmenterSalaire($pourc)
    {
        $this->salaire = round($this->salaire * $pourc);
        
    }


    public function __toString()
    {
        return "Nom : {$this->nom}, Salaire : {$this->salaire} ";
    }
}
