<?php
require_once 'Model.class.php';
require_once 'Livre.class.php';
class LivreManager extends BDconnexxion
{
    private $livres;

    public function ajoutlivres($livre)
    {
        $this->livres[] = $livre;
    }

    public function getLivre()
    {
        return $this->livres;
    }

    public function chargementLivres()
    {
        $req = $this->getBDD()->prepare('SELECT * FROM livres');
        $req->execute();
        $meslivres = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($meslivres as $value) {
            $book = new Livre($value['idLivre'], $value['titre'], $value['nbPages'], $value['image']);
            $this->ajoutlivres($book);
        }
    }
}
