<?php session_start(); 
require_once('views/admin/header.php'); ?>
<main class="voir">
    <h1><?php echo $displayCours->titre; ?></h1>
    <p><?php echo $displayCours->description; ?></p>
    <?php foreach($displayEtape as $etape){ ?>
    <h2 class="titre-etape"><?php echo $etape->titre; ?></h2>
    <p><?php echo $etape->description; ?></p>
    <p class="paragraph"><?php echo $etape->contenu; ?></p>
    <?php } ?>
    <div class="container-button">
        <a class="table-button" href="?controller=cours&action=modifCours&id=<?=$displayCours->id_cours?>">Modifier le cours</a>
        <a class="suppr-button" href="?controller=cours&action=supprimCours&id=<?=$displayCours->id_cours?>">Supprimer le cours</a>
    </div>
</main>