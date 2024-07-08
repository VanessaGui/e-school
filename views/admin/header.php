<header class="header-users">
   <?php if($_SESSION['profil'] === "administrateur"){ ?>
      <a href="?controller=admin&action=index"><img src="img/e-school.png" alt="logo de la plateforme"></a>
   <?php } elseif($_SESSION['profil'] === "formateur"){ ?>
      <a href="?controller=cours&action=index"><img src="img/e-school.png" alt="logo de la plateforme"></a>
   <?php }elseif($_SESSION['profil'] === "étudiant"){ ?>
      <a href="?controller=etudiant&action=index"><img src="img/e-school.png" alt="logo de la plateforme"></a>
   <?php } ?>
   <button class="profil"><?php echo substr($_SESSION['prenom'],0,1), substr($_SESSION['nom'],0,1);?></button>
   <span class="hidden profile-card card">
      <div><?php echo $_SESSION['prenom'].' '.$_SESSION['nom'];?></div>
      <a href="?controller=accueil&action=logout">Se déconnecter</a>
   </span>
</header>
<hr>