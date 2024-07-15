<?php require_once('header.php'); ?>
<main class="main-column">
    <h1>Bienvenue sur e-school, votre plateforme d'apprentissage en ligne</h1>
    <p>Pour pouvoir utiliser notre plateforme, connectez-vous ou créez un compte</p>
    <?php
        if (isset($_GET['ac'])) {
            echo "<p class='message-validate'>Le compte a bien été créé, connectez-vous pour accéder à votre espace</p>";
        }
    ?>
    <div class="connect">
        <a href="?controller=accueil&action=connect">Se connecter</a>
        <a href="?controller=accueil&action=creerCompte">Créer un compte</a>
    </div>
</main>
