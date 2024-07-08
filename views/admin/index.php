<?php session_start(); 
require_once('header.php');?>
<main class="main">
    <h1>Bienvenue sur l'espace administrateur</h1>
   <div class="container">
    <div class="container1">
        <h2>Formateurs</h2>
        <div>
            <table>
                <tbody>
                <?php foreach ($displayFormateur as $formateur){ ?>
                    <tr>
                    <td><?= $formateur->prenom?></td>
                        <td><?= $formateur->nom?></td>
                        <td><a class="table-button" href="?controller=admin&action=modifFormateur&id=<?=$formateur->id_user?>">Modifier</a></td>
                        <td><a class="suppr-button" href="?controller=admin&action=supprimFormateur&id=<?=$formateur->id_user?>">Supprimer</a></td>
                        <?php }?>
                    </tr>
                </tbody>
            </table>
        </div>
        <a class="button" href="?controller=admin&action=ajoutFormateur">Ajouter un formateur</a>
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