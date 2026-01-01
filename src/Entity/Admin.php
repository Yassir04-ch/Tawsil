<?php

class Admin extends User{

   public function __construct(string $firstname,string $lastname,string $email, $password, $role = "admin",$active){
        parent::__construct($firstname,$lastname, $email, $password,$role,$active );
    }

    public function listuser(){}

    public function activercompet(){}
    public function changerole(){}
    public function voirstatistique(){}
    
}