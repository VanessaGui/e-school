<?php session_start(); 
require_once('views/admin/header.php'); ?>
<main class="main">
    <h1>Bienvenue sur l'espace formateur</h1>
   <div class="container">
    <div class="container1">
        <h2>Cours</h2>
        <div>
            <table>
                <tbody>
                <?php foreach ($displayCours as $cours){ ?>
                    <tr>
                        <td><?= $cours->titre?></td>
                        <td><?= substr($cours->description,0, 50).'...'?></td>
                        <td><a class="table-button" href="?controller=cours&action=voirCours&id=<?=$cours->id_cours?>">Voir</a></td>
                        <td><a class="table-button" href="?controller=cours&action=modifCours&id=<?=$cours->id_cours?>">Modifier</a></td>
                        <td><a class="suppr-button" href="?controller=cours&action=supprimCours&id=<?=$cours->id_cours?>">Supprimer</a></td>
                        <?php }?>
                    </tr>
                </tbody>
            </table>
        </div>
            <a class="button" href="?controller=cours&action=ajoutCours">Ajouter un cours</a>
            <a class="button etape-button" href="?controller=cours&action=ajoutEtape">Ajouter une étape</a>
    </div>
  
    <div class="container2">
        <h2>Étudiants</h2>
        <div>
            <table>
                <tbody>
                <?php foreach ($displayEtudiant as $etudiant){ ?>
                    <tr>
                        <td><?= $etudiant->prenom?></td>
                        <td><?= $etudiant->nom?></td>
                        <td><a class="table-button" href="?controller=admin&action=modifEtudiant&id=<?=$etudiant->id_user?>">Modifier</a></td>
                        <td><a class="suppr-button" href="?controller=admin&action=supprimEtudiant&id=<?=$etudiant->id_user?>">Supprimer</a></td>
                    <?php }?> 
                    </tr>
                </tbody>
            </table>
        </div>
        <a class="button" href="?controller=admin&action=ajoutEtudiant">Ajouter un étudiant</a>
    </div>
   </div>  
</main>