<?php

class AuthService{

    private $userrepo;

    public function __construct( $userrepo) {
        $this->userrepo = $userrepo;
    }
    public function register(User $user){
        if ($this->userrepo->finduserbyemail($user->getEmail())) {
          return "Email déjà utilisé!";
        }
        $this->userrepo->adduser($user);
      header('location:login.php');
    }

    public function login($email,$password){
        $userdata = $this->userrepo->finduserbyemail($email);
        if (!$userdata) {
            return 'Email non trouvé';
            
        }
        if($password !== $userdata['password']){
            return 'password incorect';
        }
    $_SESSION['id'] = $userdata['id'];
    $_SESSION['firstname'] = $userdata['firstname'];
    $_SESSION['lastname']  = $userdata['lastname'];
    $_SESSION['email']     = $userdata['email'];
    $_SESSION['role']      = $userdata['role'];
 
    if ($userdata['role']==='client') {
        header('location:client.php');
    }
    elseif($userdata['role']==='livreur') {
        header('location:livreur.php');
    }   
    else{
        header('location:admin.php');
    }
}
public function logout(){
    session_destroy();
    header('location:index.php');
}

}