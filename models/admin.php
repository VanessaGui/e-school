<?php
class Admin {
    public $id_user;
    public $nom;
    public $prenom;
    public $email;
    public $password;
    public $profil;
   
    public function __construct($id_user, $nom, $prenom, $email, $password, $profil) {
      $this->id_user = $id_user;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->email = $email;
      $this->password = $password;
      $this->profil = $profil;
    }

    public static function selectFormateur(){ 
        $list =[];
        $db = Db::getInstance();
        $query = $db->prepare('SELECT * FROM users WHERE profil = "formateur" ');
        $query->execute();
        foreach($query->fetchAll() as $formateur) {
        $list[] = new Admin($formateur['id_user'],$formateur['nom'], $formateur['prenom'], $formateur['email'], $formateur['mdp'], $formateur['profil']);
        }
        return $list;
    }

    public static function selectEtudiant(){ 
        $list =[];
        $db = Db::getInstance();
        $query = $db->prepare('SELECT * FROM users WHERE profil = "étudiant" ');
        $query->execute();
        foreach($query->fetchAll() as $etudiant) {
        $list[] = new Admin($etudiant['id_user'],$etudiant['nom'], $etudiant['prenom'], $etudiant['email'], $etudiant['mdp'], $etudiant['profil']);
        }
        return $list;
    }

    public static function createFormateur(){ 
        $db = Db::getInstance();
        $nom = strip_tags($_POST['nom']);
        $prenom = strip_tags($_POST['prenom']);
        $mail = strip_tags($_POST['mail']);
        $mdp = strip_tags($_POST['mdp']);

        if(isset($nom) && !empty($nom) && isset($prenom) && !empty($prenom)) {
            $query = $db->prepare('INSERT INTO users (nom, prenom, email, mdp, profil) VALUES (:nom, :prenom, :email, :mdp, :profil)');
            $query->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $mail,
            'mdp' => password_hash($mdp, PASSWORD_DEFAULT),
            'profil' => 'formateur',
            ]);
            $create = $query->fetchAll();
        } 
        header('Location: index.php?controller=admin&action=index');
    }

    public static function createEtudiant(){ 
        $db = Db::getInstance();
        $nom = strip_tags($_POST['nom']);
        $prenom = strip_tags($_POST['prenom']);
        $mail = strip_tags($_POST['mail']);
        $mdp = strip_tags($_POST['mdp']);

        if(isset($nom) && !empty($nom) && isset($prenom) && !empty($prenom)) {
            $query = $db->prepare('INSERT INTO users (nom, prenom, email, mdp, profil) VALUES (:nom, :prenom, :email, :mdp, :profil)');
            $query->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $mail,
            'mdp' => password_hash($mdp, PASSWORD_DEFAULT),
            'profil' => 'étudiant',
            ]);
            $create = $query->fetchAll();
        } 
        header('Location: index.php?controller=admin&action=index');
    }
}