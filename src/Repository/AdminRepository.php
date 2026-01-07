<?php
require_once __DIR__ . '/../config/Database.php';
 class AdminRepository extends Database {
 public function totalrevenu(){
    $sql = 'SELECT SUM()';
 }
 public function afficheallcommande(){
   $sql = 'SELECT commandes.id,users.firstname,users.lastname,commandes.description,commandes.adresse,commandes.is_deleted,commandes.created_at,commandes.address_delivery,commandes.status 
   FROM commandes JOIN users ON client_id = users.id';
   $stmt = $this->conn->prepare($sql);
   $stmt->execute();
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }

 }
