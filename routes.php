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
        require_once('models/etudiant.php');
      break;
      case 'admin':
        require_once('models/admin.php');
        require_once('models/cours.php');
        require_once('models/etape.php');
        require_once('models/etudiant.php');
        $controller = new AdminController();
      break;
      case 'cours':
        require_once('models/admin.php');
        require_once('models/cours.php');
        require_once('models/etape.php');
        require_once('models/etudiant.php');
        $controller = new coursController();
      break;
      case 'etudiant':
        require_once('models/admin.php');
        require_once('models/cours.php');
        require_once('models/etape.php');
        require_once('models/etudiant.php');
        $controller = new EtudiantController();
      break;
    }

    $controller->{ $action }();
  }

  $controllers = array('accueil' => ['accueil', 'connect', 'creerCompte', 'createCompte', 'error', 'index','login', 'logout', 'mentions'],
                       'admin' => ['ajoutEtudiant', 'creerEtudiant', 'createEtudiant', 'ajoutFormateur', 'creerFormateur', 'createFormateur', 'index', 'header', 'displayEtudiants', 'selectEtudiant'],
                      'cours' => ['ajoutCours', 'ajoutEtape', 'creerCours', 'creerEtape', 'index', 'voirCours', 'modifCours', 'modifyCours', 'modifyEtape'],
                    'etudiant' => ['index', '']);

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