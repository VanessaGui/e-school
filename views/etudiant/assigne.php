<?php session_start(); 
require_once('views/admin/header.php');?>
<main class="voir">
    <a class="button-retour" href="?controller=cours&action=index">&#60; Retour</a>
    <h1>Assigner un étudiant à <?=$displayCours->titre?></h1>  
    <h2>Liste des étudiants non assignés</h2>
    <div>
        <?php foreach ($nonAssigne as $eleve){?>
        <form class="container3" action="index.php?controller=assigne&action=assignerCours&id=<?=$displayCours->id_cours?>" method="post">
            <div class="container-input">
                <div>&#8594;</div>
                <input class="input" type="text" name="prenom" value="<?= $eleve->prenom.' '.$eleve->nom ?>" disabled>
                <input type="hidden" name="postid" value="<?=$eleve->id_user?>" />
                <input class="table-button" type="submit" value="Assigner"/>
            </div> 
            </form>
       <?php } ?>
    </div>
   
</main>

                 