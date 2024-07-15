<?php
require_once('views/admin/header.php'); ?>
<main class="voir">
    <a class="button-retour" href="?controller=cours&action=index">&#60; Retour</a>
    <h1><?php echo $displayCours->titre; ?></h1>
    <p><?php echo $displayCours->description; ?></p>
    <?php foreach($displayEtape as $etape){ ?>
        <h2 class="titre-etape"><?php echo $etape->titre; ?></h2>
        <p><?php echo $etape->description; ?></p>
        <p class="paragraph"><?php echo $etape->contenu; ?></p>
    <?php if ($_SESSION['profil'] === 'étudiant') { ?>
        <h3>Donnez-votre avis sur cette étape</h3>
    <?php 
        $etapeNoted = false;
        foreach ($displayNote as $commentaire) {
            if ($commentaire->id_etape == $etape->id_etape) {
                $etapeNoted = true;
            break;
            }
        }
            if($etapeNoted){
                echo "<p class='message-com'>Vous avez déjà noté cette étape</p>";
            } else { ?>
        <form action="index.php?controller=cours&action=avisEtape&id=<?=$etape->id_etape?>" method="post">
            <div class="form-content2">  
                <div class="container-stars">
                    <div>Note</div>
                    <div class="container-note">
                        <div class="stars">
                            <i class="star stargrey fa-solid fa-star" data-value="1"></i>
                            <i class="star stargrey fa-solid fa-star" data-value="2"></i>
                            <i class="star stargrey fa-solid fa-star" data-value="3"></i>
                            <i class="star stargrey fa-solid fa-star" data-value="4"></i>
                            <i class="star stargrey fa-solid fa-star" data-value="5"></i>
                        </div>
                        <div class="checkboxes">
                            <input class="checkbox" type="radio" name="rating" value="1" />
                            <input class="checkbox" type="radio" name="rating" value="2" />
                            <input class="checkbox" type="radio" name="rating" value="3" />
                            <input class="checkbox" type="radio" name="rating" value="4" />
                            <input class="checkbox" type="radio" name="rating" value="5" />
                        </div>
                    </div>
                </div>
                <div class="form-label">
                    <label for="commentaire">Avis sur l'étape</label>
                    <textarea name="commentaire" required="required"></textarea>
                </div> 
            </div>
            <input type="hidden" name="coursid" value="<?=$displayCours->id_cours?>" />
                <div class="form-submit">
                    <input class="form-button" type="submit" value="Envoyer"/>
                </div>
        </form>
    <?php }} }  if ($_SESSION['profil'] == 'formateur') { ?>
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