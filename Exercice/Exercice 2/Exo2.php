<?php
class Stagiaire
{
    public function __construct(private string $nom, private array $notes)
    {
    }

    public function getNom(){return $this->nom;}
    public function getNotes(){return $this->notes;}

    public function afficherInfos()
    {
   
        echo "Note : " . implode(" ,", $this->notes);
    }
    public function calculerMoy()
    {
        $somme = array_sum($this->notes);
        $moyenne = $somme / count($this->notes);
        echo " La moyenne de {$this->nom} est de $moyenne .";
        echo "<br>";
    }
    public function Max()
    {
        echo " La note la plus élevé est ";
        echo max($this->notes);
        echo "<br>";
    }
    public function Min()
    {
        echo "La notes la plus basse est ";
        echo min($this->notes);
        echo "<br>";
    }
}
