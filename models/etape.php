<?php
class Etape {
    public $id_etape;
    public $titre;
    public $description;
    public $contenu;
    public $id_user;
    public $id_cours; 

    public function __construct($id_etape, $titre, $description,$contenu, $id_user, $id_cours) {
        $this->id_etape = $id_etape;
        $this->titre = $titre;
        $this->description = $description;
        $this->contenu = $contenu;
        $this->id_user = $id_user;
        $this->id_cours = $id_cours;
    }

    public static function selectEtape($id){ 
            $list =[];
            $db = Db::getInstance();
            $id = intval($_GET['id']);
            $query = $db->prepare('SELECT * FROM etapes WHERE id_cours = :id');
            $query->execute(['id' => $id]);
            foreach($query->fetchAll() as $etape) {
            $list[] = new Etape($etape['id_etape'], $etape['titre'], $etape['description'], $etape['contenu'], $etape['id_user'], $etape['id_cours']);
            }
           return $list;
    }
    public static function modifierEtape($id){
        $db = Db::getInstance();
        session_start();
        var_dump($_SESSION);
        $titre = strip_tags($_POST['titre']);
        $description = strip_tags($_POST['description']);
        $contenu =$_POST['contenu'];
        if (isset($_POST['titre']) AND !empty($_POST['titre'])){
            $query = $db -> prepare('UPDATE etapes  SET titre = :titre, description = :description, contenu = :contenu, id_user = :id_user WHERE id_cours = :id_cours AND id_etape = :id_etape');
            $query-> execute([
                'id_etape' => $_POST['postid'],
                'titre' => $titre,
                'description' => $description,
                'contenu' => $contenu,
                'id_user' => $_SESSION['id_user'],
                'id_cours' => $id
                
            ]);
            $modify = $query->fetchAll();
        }
          header('Location: index.php?controller=cours&action=modifCours&id='.$id.'&me'); 
    }

      public static function createEtape(){ 
        $db = Db::getInstance();
        session_start();

        $req = $db->prepare('SELECT * from cours WHERE titre = :titre');
            $req->execute([
            'titre' => $_POST['cours'],
            ]);
        $cours = $req->fetchAll();
        foreach($cours as $id){
          $id_cours = $id['id_cours'];
        }
        $titre = strip_tags($_POST['titre']);
        $description = strip_tags($_POST['description']);
        $contenu = $_POST['contenu'];

        if(isset($titre) && !empty($titre) && isset($description) && !empty($description)) {
            $query = $db->prepare('INSERT INTO etapes (titre, description, contenu, id_cours, id_user) VALUES (:titre, :description, :contenu, :id_cours, :id_user)');
            $query->execute([
            'titre' => $titre,
            'description' => $description,
            'contenu' => $contenu,
            'id_cours' => $id_cours,
            'id_user' => $_SESSION['id_user']
            ]);
            $create = $query->fetchAll();
        } 
        header('Location: index.php?controller=cours&action=ajoutEtape&ae');
    }

    public static function noterEtape($id){
        $db = Db::getInstance();
        session_start();
       $note = $_POST['rating'];
       $avis = $_POST['commentaire'];
       $id_cours = $_POST['coursid'];
       if(isset($note) && !empty($note) && isset($avis) && !empty($avis)) {
        $query = $db->prepare('INSERT INTO commentaires (avis, notation, id_etape, id_user) VALUES (:avis, :notation, :id_etape, :id_user)');
            $query->execute([
            'avis' => $avis,
            'notation' => $note,
            'id_etape' => $id,
            'id_user' => $_SESSION['id_user']
            ]);
            $create = $query->fetchAll();
       }
       header('Location: index.php?controller=cours&action=voirCours&id='.$id_cours);
    }
}