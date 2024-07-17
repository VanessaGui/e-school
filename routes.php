<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'accueil':
        $controller = new AccueilController();
        require_once('models/accueil.php');
        require_once('models/admin.php');
        require_once('models/cours.php');
        require_once('models/etape.php');
        require_once('models/assigne.php');
      break;
      case 'admin':
        require_once('models/admin.php');
        require_once('models/cours.php');
        require_once('models/etape.php');
        require_once('models/assigne.php');
        $controller = new AdminController();
      break;
      case 'assigne':
        require_once('models/admin.php');
        require_once('models/cours.php');
        require_once('models/etape.php');
        require_once('models/assigne.php');
        $controller = new AssigneController();
      break;
      case 'cours':
        require_once('models/admin.php');
        require_once('models/cours.php');
        require_once('models/etape.php');
        require_once('models/assigne.php');
        require_once('models/commentaire.php');
        require_once('models/avis.php');
        $controller = new coursController();
      break;
    }

    $controller->{ $action }();
  }

  $controllers = array('accueil' => ['accueil', 'connect', 'creerCompte', 'createCompte', 'error', 'index','login', 'logout', 'mentions', 'modifyProfil', 'profil'],
                       'admin' => ['ajoutEtudiant', 'creerEtudiant', 'createEtudiant', 'ajoutFormateur', 'creerFormateur', 'createFormateur', 'displayEtudiants', 'header', 'index', 'modifEtudiant', 'modifFormateur', 'modifyEtudiant', 'selectEtudiant', 'selectAllEtudiants', 'supprimEtudiant', 'supprimFormateur'],
                       'assigne' => ['assigne','assignerCours', 'assignerCoursEleve', 'index'],
                       'cours' => ['ajoutCours', 'ajoutEtape', 'assigner', 'avisEtape', 'creerCours', 'creerEtape', 'etapeDetail', 'index', 'voirCours', 'modifCours', 'modifyCours', 'modifyEtape', 'supprimCours']);


  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('accueil', 'error');
    }
  } else {
    call('accueil', 'error');
  }
?>