<?php
namespace BiblioTech\Model;
use BiblioTech\Model\User;
use PDO;
class Member extends User{
   private int $id;
   private Emprunt $emprunt;
   public function __construct(string $firstname, string $lastname, string $email, string $password, string $role,Emprunt $emprunt){
      parent::__construct($firstname, $lastname, $email, $password, $role);
      $this->emprunt = $emprunt;
   }
   public function getRole(){
    return 'mamber';
   }
  
 public function listLivre(){
   $sql = 'SELECT * FROM livre WHERE status !=reserve 
   JOIN auteur ON auteur_id = auteur.id';
   $stmt = Database::getconn()->prepare($sql);
   $stmt->execute();
   $stmt->setFetchMode(PDO::FETCH_CLASS,'User');
    $livres = $stmt->fetchAll();
    return $livres;
 }
 public function reserverlivre($id){
   $sql = 'UPDATE livres SET status = reserve WHERE id = ?';
   $stmt = Database::getconn()->prepare($sql);
   $stmt->execute([$id]);
 }

}