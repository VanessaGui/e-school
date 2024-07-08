<?php
class Cours {
    public $id_cours;
    public $titre;
    public $description;
    public $id_user;
   
    public function __construct($id_cours, $titre, $description, $id_user) {
        $this->id_cours = $id_cours;
        $this->titre = $titre;
        $this->description = $description;
        $this->id_user = $id_user;
    }

    public static function selectAllCours(){ 
        $list =[];
        $db = Db::getInstance();
        $query = $db->prepare('SELECT * FROM cours');
        $query->execute();
        foreach($query->fetchAll() as $cours) {
        $list[] = new Cours($cours['id_cours'],$cours['titre'], $cours['description'], $cours['id_user']);
        }
        return $list;
    }
    public static function selectCours($id){ 
        $db = Db::getInstance();
        $id = intval($_GET['id']);
        $query = $db->prepare('SELECT * FROM cours WHERE id_cours = :id');
        $query->execute(['id' => $id]);
       foreach($query->fetchAll() as $cours) {
        $item = new Cours($cours['id_cours'], $cours['titre'], $cours['description'], $cours['id_user']);
        }
       return $item;
    }

    public static function modifierCours($id){
        $db = Db::getInstance();
        session_start();
        $titre = strip_tags($_POST['titre']);
        $description = strip_tags($_POST['description']);
        if (isset($_POST['titre']) AND !empty($_POST['titre'])){
            $query = $db -> prepare('UPDATE cours SET titre = :titre, description = :description, id_user = :id_user WHERE id_cours = :id');
            $query-> execute([
                'id' => $id,
                'titre' => $titre,
                'description' => $description,
                'id_user' => $_SESSION['id_user'],
            ]);
            $modify = $query->fetchAll();
        }
          header('Location: index.php?controller=cours&action=index&id='.$id); 
      }

      public static function createCours(){ 
        $db = Db::getInstance();
        session_start();
        $titre = strip_tags($_POST['titre']);
        $description = strip_tags($_POST['description']);

        if(isset($titre) && !empty($titre) && isset($description) && !empty($description)) {
            $query = $db->prepare('INSERT INTO cours (titre, description, id_user) VALUES (:titre, :description, :id_user)');
            $query->execute([
            'titre' => $titre,
            'description' => $description,
            'id_user' => $_SESSION['id_user'],
            ]);
            $create = $query->fetchAll();
        } 
        header('Location: index.php?controller=cours&action=ajoutCours');
    }
}