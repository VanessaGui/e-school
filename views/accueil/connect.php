<?php require_once('header.php'); ?>

<main class="main-column">
    <h1>Connexion</h1>
    <div class="connect">
        <form action="index.php?controller=accueil&action=login" method="post">
            <div class="form-content">    
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
                    <input class="form-button"type="submit" value="Se connecter"/>
                </div>
            
        </form>
        <div class="form-explain">
            <p>Les champs marqués d'un (*) sont obligatoires.</p>
        </div>
    </div>
</main>