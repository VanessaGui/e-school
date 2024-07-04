<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'accueil':
        $controller = new AccueilController();
        require_once('models/accueil.php');
        require_once('models/admin.php');
        require_once('models/formateur.php');
        require_once('models/etudiant.php');
      break;
      case 'admin':
        require_once('models/admin.php');
        require_once('models/formateur.php');
        require_once('models/etudiant.php');
        $controller = new AdminController();
      break;
      case 'formateur':
        require_once('models/admin.php');
        require_once('models/formateur.php');
        require_once('models/etudiant.php');
        $controller = new FormateurController();
      break;
      case 'etudiant':
        require_once('models/admin.php');
        require_once('models/formateur.php');
        require_once('models/etudiant.php');
        $controller = new EtudiantController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('accueil' => ['accueil', 'connect', 'creerCompte', 'createCompte', 'error', 'index','login', 'logout', 'mentions'],
                       'admin' => ['index', 'header'],
                      'formateur' => ['', ''],
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