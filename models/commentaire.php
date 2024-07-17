<?php
class Commentaire {
    public $id_commentaire;
    public $avis;
    public $notation;
    public $id_etape; 
    public $id_user;
   

    public function __construct($id_commentaire, $avis, $notation, $id_etape,  $id_user) {
        $this->id_commentaire = $id_commentaire;
        $this->avis = $avis;
        $this->notation = $notation;
        $this->id_etape = $id_etape;
        $this->id_user = $id_user;
        
    }

    public static function selectNote(){ 
        $list =[];
        $db = Db::getInstance();
        session_start();
        $query = $db->prepare('SELECT * FROM commentaires WHERE id_user = :id');
        $query->execute(['id' => $_SESSION['id_user']]);
        foreach($query->fetchAll() as $com) {
            $list[] = new Commentaire($com['id_commentaire'], $com['avis'], $com['notation'], $com['id_etape'], $com['id_user']);
        }
        return $list;
    }

    public static function moyenneNote($id){
        $db = Db::getInstance();
        $id = intval($_GET['id']);
        $query = $db->prepare('SELECT ROUND(AVG(notation), 1) as moyenne FROM commentaires WHERE id_etape = :id');
        $query->execute(['id' => $id]);
        $avg = $query->fetch();
        return $avg['moyenne'];
    }
}