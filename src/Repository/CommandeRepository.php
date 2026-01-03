<?php

class CommandeRepository extends Database{

    public function __construct(){
         parent::__construct();
    }

    public function addCommande(Commande $commande){
     $sql = "INSERT INTO commande(client_id,description,adresse,is_deleted) VALUES (?,?,?,?)";
     $stmt = $this->conn->prepare($sql);
     $stmt->execute([$commende->getClient_id(),$commmend->getDescription(),$commande->getAdresse(), $commande->getIsDelete()]);
    }
    public function affichCommandes(int $clinetid){
       $sql = "SELECT * FROM commande WHERE client_id = ?";
       $stmt = $this->conn->prepare($sql);
       $stmt->execute([$clinetid]);
       $commandes = $stmt->fetchAll(PDO::FETCH_ASSOC);
       return  $commandes;
    }

    public function modifierCommande(int $comid,string $description,string $adresse){
        $sql = "UPDATE commande SET description = ? ,adresse = ? , WHERE client_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$description,$adresse,$comid]);
    }

    public function softDelet(int $comid){
    $sql = "UPDATE commande SET is_deleted = 1 WHERE client_id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$comid]);
    }
}