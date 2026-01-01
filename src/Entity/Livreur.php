<?php   

class Livreur extends User{
     public function __construct(string $firstname,string $lastname,string $email, $password, $role = "client",$active){
        parent::__construct($firstname,$lastname, $email, $password,$role,$active );
    }

    public function voirCommendes(){}
    public function envoiyerOffre(){}
    public function changerEtatcommande(){}
    
}