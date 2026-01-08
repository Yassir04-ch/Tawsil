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
    public function desactiverconte($id){
        $admindrep = new AdminRepository();
       $admindrep->desactivertactive($id);
       header("location:../views/utilisateurs.php");
    }
    public function updateroleuser($id,$role){
        $admindrep = new AdminRepository();
        $admindrep->updaterole($id,$role);

    }
}