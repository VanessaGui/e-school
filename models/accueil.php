<?php
class Accueil {
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

    public static function login(){
      session_start();
      $db = Db::getInstance();
      if (isset($_POST['mail']) && isset($_POST['mdp'])){
        $email = strip_tags($_POST['mail']);
        $mdp = strip_tags($_POST['mdp']);
        $query = $db->prepare('SELECT * FROM users WHERE email = :email');
        $query->execute([
            'email' => $email
        ]); 
        $users = $query->fetchAll();
        foreach ($users as $user) {
          if (password_verify($mdp, $user['mdp'])) {
              $_SESSION['nom'] = $user['nom'];
              $_SESSION['prenom'] = $user['prenom'];
              $_SESSION['email'] = $email;
              $_SESSION['profil'] = $user['profil'];
              $_SESSION['id_user'] = $user['id_user'];  
          }
        } if( $_SESSION['profil'] === 'administrateur'){
          header('Location: index.php?controller=admin&action=index');
        } else if( $_SESSION['profil'] === 'formateur'){
          header('Location: index.php?controller=cours&action=index');
        } else if( $_SESSION['profil'] === 'étudiant') {
          header('Location: index.php?controller=assigne&action=index');
        } else{ 
          header('Location: index.php?controller=accueil&action=error') ;
        }
      }
    }

    public static function createCompte(){
      $db = Db::getInstance();
      if (isset($_POST['mail']) || !empty($_POST['mail']) || filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL) ){
        $nom = strip_tags($_POST['nom']);
        $prenom = strip_tags($_POST['prenom']);
        $mail = strip_tags($_POST['mail']);
        $mdp = strip_tags($_POST['mdp']);
        $query = $db->prepare('INSERT INTO users (nom, prenom, email, mdp, profil) VALUES (:nom, :prenom, :email, :password, :profil)');
        $query->execute([
          'nom'=> $nom,
          'prenom' => $prenom,
          'email' => $mail,
          'password' => password_hash($mdp, PASSWORD_DEFAULT),
          'profil'=> 'étudiant'
        ]);
        foreach($query->fetchAll() as $createCompte) {
        $newCompte = new Accueil($createCompte['id_user'], $createCompte['nom'], $createCompte['prenom'], $createCompte['email'], $createCompte['password'], $createCompte['profil']);
        }
        header('Location: index.php?controller=accueil&action=index&ac');
      }
    }


  public static function modifierProfil($id){
      $db = Db::getInstance();
      session_start();
      $nom = strip_tags($_POST['nom']);
      $prenom = strip_tags($_POST['prenom']);
      $mail = strip_tags($_POST['mail']);
      $mdp = strip_tags($_POST['mdp']);
      $mdp2 = strip_tags($_POST['mdp2']);
      if($_SESSION['profil'] === 'formateur'){
        $profil = 'formateur';
      }elseif($_SESSION['profil'] === 'administrateur'){
        $profil = 'administrateur';
      }else{
        $profil= 'étudiant';
      }
      if(isset($nom) && !empty($nom) && isset($prenom) && !empty($prenom) && $mdp === $mdp2) {
          $query = $db -> prepare('UPDATE users SET nom = :nom, prenom = :prenom, email = :email, mdp = :mdp, profil = :profil  WHERE id_user = :id');
          $query-> execute([
              'id' => $id,
              'nom' => $nom,
              'prenom' => $prenom,
              'email' => $mail,
              'mdp' => password_hash($mdp, PASSWORD_DEFAULT),
              'profil' => $profil
          ]);
          $modify = $query->fetchAll();
      } if($_SESSION['profil'] === 'étudiant'){
          header('Location: index.php?controller=assigne&action=index&mpe');
      } elseif($_SESSION['profil'] === 'formateur') {
          header('Location: index.php?controller=cours&action=index&mpf');
      } else {
        header('Location: index.php?controller=admin&action=index&mpa');
      }
  }
}