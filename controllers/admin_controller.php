<?php
    class AdminController{
        public function index() {
            $displayFormateur = Admin::selectAllFormateurs();
            $displayEtudiant = Admin::selectAllEtudiants();
            require_once('views/admin/index.php');
        }
        public function ajoutFormateur(){
            require_once('views/admin/ajoutFormateur.php');
        }
        public function creerFormateur() {
            $newFormateur = Admin::createFormateur();
        }
        public function supprimFormateur(){
            $suppression = Admin::deleteFormateur($_GET['id']);
        }
        public function ajoutEtudiant(){
            require_once('views/admin/ajoutEtudiant.php');
        }
        public function creerEtudiant() {
            $newEtudiant = Admin::createEtudiant();
        }
        public function supprimEtudiant(){
            $suppression = Admin::deleteEtudiant($_GET['id']);
        }

        public function modifEtudiant(){
            $selectEtudiant = Admin::selectEtudiant($_GET['id']);
            require_once('views/admin/modifierEtudiant.php');   
        }

        public function modifyEtudiant(){
            $modifEtudiant = Admin::modifierEtudiant($_GET['id']);
        }
        
    }

?>