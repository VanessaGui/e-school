<?php
    class AccueilController{
        public function index() {
            require_once('views/accueil/index.php');
          }
      
        public function error() {
            require_once('views/accueil/error.php');
        }

        public function mentions() {
            require_once('views/accueil/mentions.php');
        }

          
        public function connect() {
            require_once('views/accueil/connect.php');
        }

        public function login() {
            $login = Accueil::login();
        }
  
        public function creerCompte() {
        require_once('views/accueil/creerCompte.php');
        }

        public function createCompte() {
            $createCompte = Accueil::createCompte();
        }

        public function logout() {
            session_start();
            $_SESSION = [];
            session_destroy();
            header('Location: index.php?controller=accueil&action=index'); 
            exit();  
        }
    }

?>