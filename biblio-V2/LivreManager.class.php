<?php

class LivreManager
{
    private $livres;

    public function ajoutlivres($livre){$this->livres[] = $livre;}
    
    public function getLivre()
    {
        return $this->livres;
    }
}
