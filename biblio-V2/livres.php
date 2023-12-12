<?php 
// require_once "Livre.class.php";
require_once "LivreManager.class.php";
require_once "Model.class.php";

$livreManager = new LivreManager;
$livreManager-> chargementLivres();

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