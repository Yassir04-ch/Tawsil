<?php
class Client extends User{
    public function __construct(string $firstname,string $lastname,string $email, $password, $role = "client",$active){
        parent::__construct($firstname,$lastname, $email, $password,$role,$active );
    }
    public function creerCommande(){}
    public function modifierCommande(){}
    public function annulercommande(){}
    public function supprimerCommande(){}
    public function accepteoffre(){}
    public function validerlivreson(){}
    public function consulteroffre(){}
    
}