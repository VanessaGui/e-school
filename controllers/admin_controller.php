<?php
    class AdminController{
        public function index() {
            $displayFormateur = Admin::selectFormateur();
            $displayEtudiant = Admin::selectEtudiant();
            require_once('views/admin/index.php');
        }
        public function ajoutFormateur(){
            require_once('views/admin/ajoutFormateur.php');
        }
        public function creerFormateur() {
            $newFormateur = Admin::createFormateur();
        }

        public function ajoutEtudiant(){
            require_once('views/admin/ajoutEtudiant.php');
        }
        public function creerEtudiant() {
            $newEtudiant = Admin::createEtudiant();
        }
    }

?>