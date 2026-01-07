<?php
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
}