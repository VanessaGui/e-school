<?php session_start(); 
require_once('views/admin/header.php');?>
<main class="main">
    <h1>Modifier mon profil</h1>
        <div class="connect">
            <form action="index.php?controller=accueil&action=modifyProfil&id=<?=$selectProfil->id_user?>" method="post">
                <div class="form-content">   
                    <div class="form-label">
                        <label for="nom">nom *</label>
                        <input type="text" name="nom" required="required" value="<?php echo $selectProfil->nom?>">
                    </div>
                    <div class="form-label">
                        <label for="prenom">prenom *</label>
                        <input type="text" name="prenom" required="required" value="<?php echo $selectProfil->prenom?>">
                    </div> 
                    <div class="form-label">
                        <label for="mail">email *</label>
                        <input type="email" name="mail" required="required" value="<?php echo $selectProfil->email?>">
                    </div>
                    <div class="form-label">
                        <label for="mdp">mot de passe *</label>
                        <input type="password" name="mdp" required="required">
                    </div>
                    <div class="form-label">
                        <label for="mdp2">répétez le mot de passe *</label>
                        <input type="password" name="mdp2" required="required">
                    </div>
                </div>
                <div class="form-submit">
                    <input class="form-button"type="submit" value="Modifier"/>
                </div>
            </form>
        <div class="form-explain">
            <p>Les champs marqués d'un (*) sont obligatoires.</p>
        </div>
    </div>