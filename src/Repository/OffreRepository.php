<?php
require_once __DIR__ . '/../config/Database.php';
class OffreRepository extends Database{

    public function __construct(){
         parent::__construct();
    }

    public function addoffre(Offre $offre){
     $sql = "INSERT INTO offres (commande_id,livreur_id,prix,duree,type_vehicule,options) VALUES (?,?,?,?,?,?)";
     $stmt = $this->conn->prepare($sql);
     $stmt->execute([$offre->getCommande_id(),$offre->getLivreur_id(),$offre->getPrix(),$offre->getDuree(), $offre->getType_vehicule(),$offre->getOption()]);
    }
    public function affichoffres(int $commandeid){
       $sql = "SELECT offres.id,users.firstname,users.lastname,prix,duree,type_vehicule,`options`,offres.created_at,status_offre FROM offres  JOIN users ON offres.livreur_id = users.id WHERE commande_id = ?";
       $stmt = $this->conn->prepare($sql);
       $stmt->execute([$commandeid]);
       $offres = $stmt->fetchAll(PDO::FETCH_ASSOC);
       return  $offres;
    }

    public function updatstatutcom($comid,$status){
        $sql = "UPDATE commandes SET status = :status WHERE id = :comid";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['status'=>$status,'comid'=>$comid]);
    }
      public function updatstatutoffre($offrid,$status){
        $sql = "UPDATE offres SET status_offre = :status WHERE id = :offrid";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['status'=>$status,'offrid'=>$offrid]);
    }


    public function modifieroffre( $ofid, $description, $adresse, $address_delivery){
        $sql = "UPDATE commandes SET description = ? ,adresse = ? ,address_delivery = ?, WHERE client_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$description,$adresse,$address_delivery,$ofid]);
    }

    public function softDelet(int $comid){
    $sql = "UPDATE commandes SET is_deleted = 1 WHERE client_id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$comid]);
    }
}