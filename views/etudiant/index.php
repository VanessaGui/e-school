<?php require_once('views/admin/header.php'); ?>
<main class="main">
<h1>Mes cours</h1>
    <div class="container-all-cours">
    <?php foreach ($coursAssigne as $cours){ ?>
        <a class="container-cours" href="?controller=cours&action=voirCours&id=<?=$cours->id_cours?>">
            <h2><?=$cours->titre?></h2>
            <div><?=$cours->description?></div>
        </a>
    <?php } ?>
    </div>
</main>