<?php require_once "Livre.class.php";
require_once "LivreManager.class.php";


$livre1 = new Livre(1, "HTML 5", 300, "html.jpg");
$livre2 = new Livre(2, "CSS 3", 350, "css.jpg");
$livre3 = new Livre(3, "Le Javascript", 250, "js.jpg");
$livre4 = new Livre(4, "PHP 8", 550, "php.jpg");

$livreManager = new LivreManager;
$livreManager ->ajoutlivres($livre1);
$livreManager ->ajoutlivres($livre2);
$livreManager ->ajoutlivres($livre3);
$livreManager ->ajoutlivres($livre4);
ob_start();
?>

<table>
    <tr>
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th>Actions</th>
    </tr>
    <?php
    for ($i = 0; $i < count($livreManager->getLivre()); $i++) :
        ?>
        <tr>
            <td><img src="public/images/<?= $livreManager->getLivre()[$i]->getImage() ?>" alt=""></td>
            <td><?= $livreManager->getLivre()[$i]->getTitre() ?></td>
            <td><?= $livreManager->getLivre()[$i]->getNbPages() ?></td>
            <td>
                <!-- Divisez la colonne "Actions" en deux sous-colonnes -->
                <button>Modifier</button>
                <button>Supprimer</button>
            </td>
        </tr>

    <?php endfor; ?>
</table>
<button>Ajouter</button>


<?php
$titre = "Les livres de la bibliothèque";
$content = ob_get_clean();
require "template.php";
?>