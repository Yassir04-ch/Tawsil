<?php

namespace Src\Repository;
require_once __DIR__ . '/../../vendor/autoload.php';

use Src\Config\Database;
use PDO;

 class AdminRepository extends Database {
 public function totalrevenu(){
    $sql = "SELECT SUM(prix) as total FROM offres WHERE status_offre = 'Acceptée'";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $total = $stmt->fetch(PDO::FETCH_ASSOC);
    return $total;
 }
 public function commandeterminer(){
  $sql = "SELECT COUNT(*) as commter FROM commandes WHERE status = 'Commande livrée'";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute();
  $toatl = $stmt->fetch(PDO::FETCH_ASSOC);
  return $toatl;
 }
  public function commandeannuler(){
  $sql = "SELECT COUNT(*) as commannu FROM commandes WHERE status = 'Annulée'";
  $stmt = $this->conn->prepare($sql);
  $stmt->execute();
  $annuler = $stmt->fetch(PDO::FETCH_ASSOC);
  return $annuler;
 }
 public function afficheallcommande(){
   $sql = 'SELECT commandes.id,users.firstname,users.lastname,commandes.description,commandes.adresse,commandes.is_deleted,commandes.created_at,commandes.address_delivery,commandes.status 
   FROM commandes JOIN users ON client_id = users.id';
   $stmt = $this->conn->prepare($sql);
   $stmt->execute();
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
 public function desactivertactive($id){
        $sql = 'UPDATE users SET active = 3 WHERE id = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }
 public function activerconte($id){
     $sql = 'UPDATE users SET active = 0 WHERE id = ?';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$id]);
 }
 public function updaterole($id,$role){
   $sql = 'UPDATE users SET role = ? WHERE id = ?';
   $stmt = $this->conn->prepare($sql);
   $stmt->execute([$role, $id]);
  }

 }
