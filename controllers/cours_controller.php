<?php
    class CoursController{
        public function index(){
            $displayEtudiant = Admin::selectEtudiant();
            $displayCours= Cours::selectAllCours();
            require_once('views/formateur/index.php');
        }

        public function ajoutCours(){
            require_once('views/formateur/ajoutCours.php');
        }
        public function ajoutEtape(){
            $displayCours= Cours::selectAllCours();
            require_once('views/formateur/ajoutEtape.php');
        }
        public function creerCours() {
            $newCours = Cours::createCours();
        }
        public function creerEtape() {
            $newEtape = Etape::createEtape();
        }
        public function voirCours() {
            $displayCours= Cours::selectCours($_GET['id']);
            $displayEtape = Etape::selectEtape($_GET['id']);
            require_once('views/formateur/voirCours.php');
        }
        public function modifCours(){
            $displayCours= Cours::selectCours($_GET['id']);
            $displayEtape = Etape::selectEtape($_GET['id']);
            require_once('views/formateur/modifierCours.php');
        }
        public function modifyCours(){
            $modifCours = Cours::modifierCours($_GET['id']);
            
        }
        public function modifyEtape(){
            $modifEtape = Etape::modifierEtape($_GET['id']);
        }
    }

?>