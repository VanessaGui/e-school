<?php session_start(); 
require_once('views/admin/header.php');?>
<main class="main">
    <a class="button-retour" href="?controller=cours&action=index">&#60; Retour</a>
    <h1>Ajouter une étape</h1>
    <?php if (isset($_GET['ae'])){
        echo "<p class='message-validate'>Vous avez ajouté une étape</p>";
    } ?>
        <div id="form" class="form-etape">
            <form action="index.php?controller=cours&action=creerEtape" method="post">
                <div class="form-content2">  
                    <div class="form-label">
                        <label for="cours">Choisir un cours *</label>
                        <select name="cours" required="required">
                            <option selected>--choisir--</option>
                            <?php foreach($displayCours as $cours){?>
                            <option><?= $cours->titre ?></option>
                            <?php }?>
                       </select>
                    </div>
                    <div class="form-label">
                        <label for="titre">Titre de l'étape *</label>
                        <input type="text" name="titre" required="required">
                    </div>
                    <div class="form-label">
                        <label for="description">Description de l'étape *</label>
                        <textarea name="description" required="required"></textarea>
                    </div> 
                    <div class="form-label">
                        <label for="contenu">Contenu de l'étape *</label>
                        <textarea class="editable" name="contenu"></textarea>
                    </div> 
                </div>
                    <div class="form-submit">
                        <input class="form-button" type="submit" value="Ajouter"/>
                    </div>
            </form>
        </div>
        <div class="form-explain explain">
            <p>Les champs marqués d'un (*) sont obligatoires.</p>
        </div>
</main>