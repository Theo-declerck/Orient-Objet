<?php
class Manager extends Employe
{
    protected array $employegere;
    public function getEmploye()
    {
        return $this->employegere;
    }

    public function __construct(string $nom, int $salaire, array $employegere)
    {
        parent::__construct($nom, $salaire);
        $this->employegere = $employegere;
    }
    public function ajouterEmployer( $employe)
    {
        $this->employegere[]=$employe;
       
    }
    public function afficherInfos()
    {       
         parent::afficherInfos();
         foreach($this->employegere as $employe){
            echo "Nom : {$employe->nom} , Salaire : {$employe ->salaire} \n";
         }
    }
}
