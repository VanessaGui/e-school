<?php
require_once('views/admin/header.php');?>
<main class="voir">
    <a class="button-retour" href="?controller=cours&action=index">&#60; Retour</a>
    <h1>Assigner un cours à <?=$selectEtudiant->prenom. ' '.$selectEtudiant->nom?></h1>  
    <h2>Liste des cours non assignés</h2>
    <div>
        <?php foreach ($coursNonAssigne as $cours){?>
        <form class="container3" action="index.php?controller=assigne&action=assignerCoursEleve&id=<?=$cours->id_cours?>" method="post">
            <div class="container-input">
                <div>&#8594;</div>
                <input class="input input-cours" type="text" name="cours" value="<?= $cours->titre ?>" disabled>
                <input type="hidden" name="postid" value="<?=$_GET['id']?>" />
                <input class="table-button" type="submit" value="Assigner"/>
            </div> 
            </form>
       <?php } ?>
    </div>
</main>