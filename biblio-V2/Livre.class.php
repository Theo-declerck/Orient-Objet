<?php
class Livre{
    private $idLivre;
    private $titre;
    private $nbPages;
    private $image;

    public static $livres;

    public function __construct($idLivre,$titre,$nbPages,$image)
    {
        $this->idLivre=$idLivre;
        $this->titre=$titre;
        $this->nbPages=$nbPages;
        $this->image=$image;
      
    }
    public function getidLivre(){return $this->idLivre;}
    public function setIdLivre($idLivre){$this->idLivre=$idLivre;}

    public function getTitre(){return $this->titre;}
    public function setTitre($titre){$this->titre=$titre;}


    public function getNbPages(){return $this->nbPages;}
    public function setNbPages($nbpages){$this->nbPages=$nbpages;}
    
    public function getImage(){return $this->image;}
    public function setImage($image){$this->image=$image;}
}