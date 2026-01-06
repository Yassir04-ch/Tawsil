<?php
require_once __DIR__ . '/../config/Database.php';
 class AdminRepository extends Database {
 public function totalrevenu(){
    $sql = 'SELECT SUM()';
 }

 }
