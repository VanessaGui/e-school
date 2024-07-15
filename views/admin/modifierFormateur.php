<?php session_start();
require_once('views/admin/header.php');?>
<main class="main">
    <a class="button-retour" href="?controller=admin&action=index">&#60; Retour</a>
    <h1>Modifier un formateur</h1>
        <div class="connect">
            <form action="index.php?controller=admin&action=modifyEtudiant&id=<?=$selectEtudiant->id_user?>" method="post">
                <div class="form-content">   
                    <div class="form-label">
                        <label for="nom">nom *</label>
                        <input type="text" name="nom" required="required" value="<?php echo $selectEtudiant->nom?>">
                    </div>
                    <div class="form-label">
                        <label for="prenom">prenom *</label>
                        <input type="text" name="prenom" required="required" value="<?php echo $selectEtudiant->prenom?>">
                    </div> 
                    <div class="form-label">
                        <label for="mail">email *</label>
                        <input type="email" name="mail" required="required" value="<?php echo $selectEtudiant->email?>">
                    </div>
                    <div class="form-label">
                        <label for="profil">Choisir un profil *</label>
                        <select name="profil" required="required">
                            <option selected>--choisir--</option>
                            <option>administrateur</option>
                            <option>formateur</option>
                            <option>étudiant</option>
                       </select>
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