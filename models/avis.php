<?php
class Avis {
    public $id_commentaire;
    public $avis;
    public $notation;
    public $id_etape; 
    public $id_user;
    public $nom;
    public $prenom;
   

    public function __construct($id_commentaire, $avis, $notation, $id_etape,  $id_user, $nom, $prenom) {
        $this->id_commentaire = $id_commentaire;
        $this->avis = $avis;
        $this->notation = $notation;
        $this->id_etape = $id_etape;
        $this->id_user = $id_user;
        $this->nom = $nom;
        $this->prenom = $prenom;  
    }

    public static function selectAvis($id){ 
        $list =[];
        $db = Db::getInstance();
        $query = $db->prepare(' SELECT * FROM commentaires c LEFT JOIN users u ON c.id_user = u.id_user WHERE id_etape = :id ');
        $query->execute(['id' => $id]);
        foreach($query->fetchAll() as $avis) {
            $list[] = new Avis($avis['id_commentaire'], $avis['avis'], $avis['notation'], $avis['id_etape'], $avis['id_user'], $avis['nom'], $avis['prenom']);
        }
        return $list;
    }
}