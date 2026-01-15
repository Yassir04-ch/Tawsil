<?php
namespace BiblioTech\Model;
use BiblioTech\Model\User;
class Aurganisateur extends User{
    private int $id;
    public function __construct(string $firstname, string $lastname, string $email, string $password, string $role) {
        parent::__construct($firstname, $lastname, $email, $password, $role);
    }
      public function getRole(){
        return 'aurganisateur';
      }
      
      public function ajouterlivre(Livre $livre){
        $sql = 'INSERT INTO livres(name,description,auteur) VALUE (?,?,?) ';
        $stmt = Database::getconn()->prepare($sql);
        $stmt->execute([$livre->getName(), $livre->getDescription(),$livre->getAuteur()->id]);        
      } 


}