<?php session_start();
    if (empty($_SESSION)) {
        require_once('header.php'); 
    } else {
        require_once('views/admin/header.php');
    }   
?>
<main class="main">
    <?php if (empty($_SESSION)) { ?>
    <a class="button-retour" href="?controller=accueil&action=index">&#60; Retour</a>
    <?php } elseif($_SESSION['profil'] == 'formateur') { ?>
    <a class="button-retour" href="?controller=cours&action=index">&#60; Retour</a>
    <?php } elseif($_SESSION['profil'] == 'étudiant') { ?>
    <a class="button-retour" href="?controller=assigne&action=index">&#60; Retour</a>
    <?php } else {?>
    <a class="button-retour" href="?controller=admin&action=index">&#60; Retour</a>
    <?php } ?>
    <h1>Mentions légales</h1>
    <div class="mentions">
        <h2>Mention 1</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod rem explicabo mollitia quas repudiandae doloremque tempora maxime possimus minima nostrum maiores, at magni, harum corrupti quisquam dolores velit in sit?
        Harum qui, voluptatem nesciunt pariatur culpa alias eaque aut, ipsum possimus porro omnis quo, quod repellendus? Consectetur corporis velit non, ex rem debitis architecto rerum saepe iusto id? Nemo, sit!
        Earum, assumenda dicta ab enim itaque laboriosam perspiciatis fugit magnam, hic unde praesentium explicabo laudantium consectetur sint eos. Corporis molestiae mollitia laudantium necessitatibus facere minima excepturi, dolore at veniam provident.
        Explicabo nam ex error ea quam facilis quas architecto deleniti consectetur. Repudiandae alias facilis libero aliquid quaerat praesentium recusandae voluptatibus, est vitae. Nesciunt delectus similique minima praesentium magnam recusandae ut.
        Placeat repellat veritatis, beatae perferendis quod fugiat nulla accusantium voluptates, quos pariatur dolorum, distinctio veniam corrupti ipsam necessitatibus quam nihil ab voluptatem porro ratione? Voluptas nisi ipsam reiciendis quibusdam ducimus.
        Facilis fugiat laudantium quaerat animi non aliquid alias labore expedita dolores. Voluptas consectetur aut porro repudiandae optio sapiente quae? Atque sequi velit ipsam reiciendis provident voluptatem dolores reprehenderit eaque inventore?
        Blanditiis tempora non eos fugiat voluptates vitae omnis harum praesentium rerum! Deleniti pariatur fugit sunt, porro deserunt eveniet mollitia iusto quaerat. Itaque, quod ut eligendi reiciendis provident qui quibusdam aperiam.
        Animi, sed sunt! Dolor alias labore facere hic excepturi perspiciatis incidunt sit maiores perferendis minima illo animi nemo fuga tenetur dicta, porro possimus eius, id nihil soluta? Dolore, labore ducimus?
        Et sequi aperiam vitae nam amet nihil quibusdam, inventore, alias sint, obcaecati distinctio a officia quasi repellendus similique dolores quo impedit vel? Esse quasi perspiciatis quidem magni quas, provident at!
        Earum harum fugit veniam veritatis illo voluptas hic magnam exercitationem sed consectetur consequuntur soluta nesciunt, pariatur, unde dolorem ut numquam nam quidem inventore nobis? Vitae architecto et adipisci deleniti ut. 
        </p>
        <h2>Mention 2</h2>
        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque maiores libero nostrum neque quam sint et minus voluptatibus officia exercitationem assumenda fugit unde explicabo distinctio deleniti temporibus illo, quos necessitatibus!
        Aut quod eius ipsa maiores hic dolore temporibus aliquid quos omnis vel? Quia, labore quibusdam repellendus dignissimos quis sint? Accusantium impedit quae vero voluptas ducimus odit exercitationem praesentium corporis veniam.
        Delectus voluptatem voluptates nemo fuga adipisci mollitia saepe dolore, nostrum error magni doloribus odit doloremque porro officiis. Quibusdam beatae soluta a ab! Quo commodi numquam id obcaecati quia molestiae rerum!
        Reprehenderit veniam cum reiciendis quidem similique deleniti ut repellat, impedit earum esse expedita eos illo aut iure repellendus id magnam ex distinctio iste! Aspernatur asperiores itaque voluptatum nisi explicabo quam.
        Distinctio officiis culpa, itaque doloribus perspiciatis dicta asperiores quia unde facere ipsum, ducimus, accusamus ullam? Sequi dolore, maiores ullam libero quam modi ducimus saepe laborum commodi harum! Odio, nam iste.
        </p>
        <h2>Mention 3</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi illum et nisi sequi natus dolorum eius quisquam magnam quibusdam ipsam. Provident sunt nisi cum fugit pariatur accusantium qui culpa quod?Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Rem qui facilis cupiditate quibusdam doloribus dolorum unde porro eligendi sapiente provident! Fugit enim nobis assumenda consequatur ut repellat optio modi vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, aut sit quas tempore culpa dicta! Quaerat beatae culpa aperiam tempora sapiente unde laudantium fuga explicabo? Suscipit reprehenderit quis velit beatae!
        </p>    
    </div>
</main>