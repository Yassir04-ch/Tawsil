<?php

namespace Src\Repository;
require_once __DIR__ . '/../../vendor/autoload.php';

use Src\Config\Database;
use PDO;

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
 public function desactivertactive($id){
        $sql = 'UPDATE users SET active = 3 WHERE id = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }
 public function updaterole($id,$role){
   $sql = 'UPDATE users SET role = ? WHERE id = ?';
   $stmt = $this->conn->prepare($sql);
   $stmt->execute([$id,$role]);
  }
 }
