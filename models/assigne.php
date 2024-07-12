<?php
class Assigne{
    public $id_user;
    public $nom;
    public $prenom;
    
    public function __construct($id_user, $nom, $prenom) {
        $this->id_user = $id_user;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public static function assignerCours($id){
        $db = Db::getInstance();
        $id = intval($_GET['id']);
        $query = $db->prepare('INSERT INTO assigne (id_user, id_cours) VALUES (:id_user, :id_cours)');
        $query->execute([
        'id_user' => $_POST['postid'],
        'id_cours' => $id
        ]);
        $create = $query->fetchAll();
    
    header('Location: index.php?controller=cours&action=assigner&id='.$id);
    }

    public static function selectAssigne($id){ 
        $list =[];
        $db = Db::getInstance();
        $id = intval($_GET['id']);
        $query = $db->prepare('SELECT * FROM assigne a INNER JOIN users u ON a.id_user = u.id_user WHERE id_cours = :id');
        $query->execute(['id' => $id]);
        foreach($query->fetchAll() as $etudiant) {
        $list[] = new Assigne($etudiant['id_user'], $etudiant['nom'], $etudiant['prenom']);
        }
       return $list;
    }

    public static function selectEtudiants($id){
        $list =[];
        $db = Db::getInstance();
        $id = intval($_GET['id']);
        $query = $db->prepare('SELECT u.id_user, u.nom, u.prenom FROM users u LEFT JOIN ( SELECT id_user FROM assigne WHERE id_cours = :id) a ON a.id_user = u.id_user WHERE a.id_user IS NULL AND u.profil = "étudiant"');
        $query->execute(['id' => $id]);
        foreach($query->fetchAll() as $etudiant) {
        $list[] = new Assigne($etudiant['id_user'], $etudiant['nom'], $etudiant['prenom']);
        }
       return $list;  
    }
}