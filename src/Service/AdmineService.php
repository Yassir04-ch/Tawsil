<?php

namespace Src\Service;
use Src\Repository\UserRepository;
use Src\Repository\AdminRepository;

class AdmineService{
    public function affichusers($id){
     $userepo = new UserRepository(); 
     $users = $userepo->affichusers($id);
     return $users;
    }
    public function affichallcommandes(){
        $admindrep = new AdminRepository();
        return $admindrep->afficheallcommande();
    }
    public function desactiverconte($id){
        $admindrep = new AdminRepository();
       $admindrep->desactivertactive($id);
    }
    public function updateroleuser($id,$role){
        $admindrep = new AdminRepository();
        $admindrep->updaterole($id,$role);
    }
}