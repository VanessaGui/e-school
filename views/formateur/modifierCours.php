<?php session_start(); 
require_once('views/admin/header.php');?>
<main class="main">
    <h1>Modifier le cours</h1>
        <div>
            <form action="index.php?controller=cours&action=modifyCours&id=<?=$displayCours->id_cours?>" method="post">
                <div class="form-content">   
                <div class="form-label">
                        <label for="titre">Titre du cours *</label>
                        <input type="text" name="titre" required="required" value="<?php echo $displayCours->titre?>">
                    </div>
                    <div class="form-label">
                        <label for="description">Description du cours *</label>
                        <textarea name="description" required="required"><?php echo $displayCours->description?></textarea>
                    </div> 
                </div>
                    <div class="form-submit">
                        <input class="form-button"type="submit" value="Modifier"/>
                    </div>
            </form>
        </div>
        <div class="form-etape">
        <?php foreach($displayEtape as $etape){
            if($etape->id_cours = $_GET['id']) { 
        ?>
         <hr class="hr" />
            <form action="index.php?controller=cours&action=modifyEtape&id=<?=$etape->id_cours?>" method="post">
                <div class="form-content2">   
                    <div class="form-label">
                        <label for="titre">Titre de l'étape *</label>
                        <input type="text" name="titre" required="required" value="<?php echo $etape->titre?>">
                    </div>
                    <div class="form-label">
                        <label for="description">Description de l'étape *</label>
                        <textarea name="description" required="required"><?php echo $etape->description?></textarea>
                    </div> 
                    <div class="form-label">
                        <label for="contenu">Contenu de l'étape *</label>
                        <textarea class="editable" name="contenu" required="required"><?php echo $etape->contenu?></textarea>
                    </div> 
                </div>
                <input type="hidden" name="postid" value="<?=$etape->id_etape?>" />
                    <div class="form-submit">
                        <input class="form-button"type="submit" value="Modifier"/>
                    </div>
            </form>
        <?php }} ?>
        </div>
        <div class="form-explain explain">
            <p>Les champs marqués d'un (*) sont obligatoires.</p>
        </div>
        <a class="button2" href="?controller=cours&action=index">Terminer</a>
</main>