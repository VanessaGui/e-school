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

        }
    }

?>