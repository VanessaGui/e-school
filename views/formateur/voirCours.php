<?php  session_start(); 
require_once('views/admin/header.php'); ?>
<main class="voir">
    <?php if($_SESSION['profil'] == 'formateur') { ?>
    <a class="button-retour" href="?controller=cours&action=index">&#60; Retour</a>
    <?php } else { ?>
    <a class="button-retour" href="?controller=assigne&action=index">&#60; Retour</a>
    <?php } ?>
    <h1><?php echo $displayCours->titre; ?></h1>
    <p><?php echo $displayCours->description; ?></p>
    <?php foreach($displayEtape as $etape){ ?>
        <h2 class="titre-etape"><a href="?controller=cours&action=etapeDetail&id=<?php echo $etape->id_etape; ?>">&#10148; <?php echo $etape->titre; ?></a></h2>
        <p><?php echo $etape->description; ?></p>
    <?php } ?>
    <?php if ($_SESSION['profil'] == 'formateur') { ?>
    <div class="container-button">
        <a class="table-button" href="?controller=cours&action=modifCours&id=<?=$displayCours->id_cours?>">Modifier le cours</a>
        <a class="suppr-button" href="?controller=cours&action=supprimCours&id=<?=$displayCours->id_cours?>">Supprimer le cours</a>
    </div>
    <div class="assigner">
        <h2>Étudiants inscrits à ce cours:</h2>
        <div class="assigne">
            <?php foreach($displayAssigne as $etudiant){ ?>
                <div>&#8594; <?=$etudiant->prenom.' '.$etudiant->nom?></div>
            <?php } ?>
        </div>
        <a class="table-button" href="?controller=cours&action=assigner&id=<?=$displayCours->id_cours?>">Assigner un nouvel étudiant</a>
    </div>
    <?php } ?>
</main>