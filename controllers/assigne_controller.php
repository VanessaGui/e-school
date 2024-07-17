<?php
    class AssigneController{
        public function index() {
            $coursAssigne = Cours::coursAssigne();
            require_once('views/etudiant/index.php');
        }

        public function assignerCours(){
            $etudiantAssigne = Assigne::assignerCours($_GET['id']);
        }

        public static function assigne(){
            $selectEtudiant = Admin::selectEtudiant($_GET['id']);
            $coursNonAssigne = Cours::coursNonAssigne($_GET['id']);
            require_once('views/formateur/assignerCours.php');
        }

        public function assignerCoursEleve(){
            $coursAssigne = Assigne::assignerCoursEleve($_GET['id']);
        }

    }

?>