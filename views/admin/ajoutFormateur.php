<?php session_start(); 
require_once('header.php');?>

<main class="main-column">
    <a class="button-retour" href="?controller=admin&action=index">&#60; Retour</a>
    <h1>Ajouter un formateur</h1>
    <div class="connect">
        <form action="index.php?controller=admin&action=creerFormateur" method="post">
            <div class="form-content">   
            <div class="form-label">
                    <label for="nom">nom *</label>
                    <input type="text" name="nom" required="required">
                </div>
                <div class="form-label">
                    <label for="prenom">prenom *</label>
                    <input type="text" name="prenom" required="required">
                </div> 
                <div class="form-label">
                    <label for="mail">email *</label>
                    <input type="email" name="mail" required="required">
                </div>
                <div class="form-label">
                    <label for="mdp">mot de passe *</label>
                    <input type="password" name="mdp" required="required">
                </div>
            </div>
                <div class="form-submit">
                    <input class="form-button"type="submit" value="Ajouter"/>
                </div>
        </form>
        <div class="form-explain">
            <p>Les champs marqués d'un (*) sont obligatoires.</p>
        </div>
    </div>
</main>