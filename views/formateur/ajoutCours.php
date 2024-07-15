<?php session_start(); 
require_once('views/admin/header.php');?>
<main class="main">
    <a class="button-retour" href="?controller=cours&action=index">&#60; Retour</a>
    <h1>Ajouter un cours</h1>
    <?php if (isset($_GET['ac'])){
        echo "<p class='message-validate'>Vous avez ajouté un cours</p>";
    } ?>
        <div>
            <form action="index.php?controller=cours&action=creerCours" method="post">
                <div class="form-content">   
                <div class="form-label">
                        <label for="titre">Titre du cours *</label>
                        <input type="text" name="titre" required="required">
                    </div>
                    <div class="form-label">
                        <label for="description">Description du cours *</label>
                        <textarea name="description" required="required"></textarea>
                    </div> 
                </div>
                    <div class="form-submit">
                        <input class="form-button"type="submit" value="Ajouter"/>
                    </div>
            </form>
        </div>
        <div class="form-explain explain">
            <p>Les champs marqués d'un (*) sont obligatoires.</p>
        </div>
        <a class="button button-etape" href="?controller=cours&action=ajoutEtape">Ajouter une étape</a>
</main>
