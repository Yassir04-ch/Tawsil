<?php

namespace Src\Repository;
use Src\Config\Database;
use PDO;
use Src\Entity\Commande;

 class CommandeRepository extends Database{

    public function __construct(){
         parent::__construct();
    }

    public function addCommande(Commande $commande){
     $sql = "INSERT INTO commandes (client_id,description,adresse,address_delivery,status,is_deleted) VALUES (?,?,?,?,?,?)";
     $stmt = $this->conn->prepare($sql);
     $stmt->execute([$commande->getClient_id(),$commande->getDescription(),$commande->getAdresse(),$commande->getAddress_delivery(),$commande->getStatus(), $commande->getIs_delete()]);
    }
    public function affichCommandes(int $clinetid){
       $sql = "SELECT * FROM commandes WHERE client_id = ? AND is_deleted = 0";
       $stmt = $this->conn->prepare($sql);
       $stmt->execute([$clinetid]);
       $commandes = $stmt->fetchAll(PDO::FETCH_ASSOC);
       return  $commandes;
    }
    public function getCommande(int $id){
    $sql = "SELECT * FROM commandes WHERE id = ?";
       $stmt = $this->conn->prepare($sql);
       $stmt->execute([$id]);
       $commandes = $stmt->fetch(PDO::FETCH_ASSOC);
       return  $commandes;
    }

    public function affichallcommande(){
        $sql = "SELECT  * FROM commandes WHERE is_deleted = 0  AND status = En attente";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $commandes =  $stmt->fetchAll(PDO::FETCH_ASSOC);
           return $commandes;
    }
     public function commandelivreur(){
        $sql = "SELECT  * FROM commandes  WHERE is_deleted = 0 AND status != 'Commande livrée'  AND status != 'Annulée'
        ORDER BY status ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $commandes =  $stmt->fetchAll(PDO::FETCH_ASSOC);
           return $commandes;   
     }


    public function modifierCommande(int $comid,string $description,string $adresse,string $address_delivery){
        $sql = "UPDATE commandes SET description = ? ,adresse = ? ,address_delivery = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$description,$adresse,$address_delivery,$comid]);
    }

    public function softDelet(int $comid){
    $sql = "UPDATE commandes SET is_deleted = 1 WHERE id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$comid]);
    } 
     

}