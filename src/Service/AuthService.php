<?php

class AuthService{

    private $userrepo;

    public function __construct( $userrepo) {
        $this->userrepo = $userrepo;
    }
    public function register($fname,$lname,$email,$password,$role) {
            switch ($role) {
        case 'client':
            $user = new Client($fname, $lname, $email, $password,$role,1);
            break;
        case 'livreur':
            $user = new Livreur($fname, $lname, $email, $password,$role,1);
            break;
        case 'admin':
            $user = new Admin($fname, $lname, $email, $password,$role,1);
            break;
        default:
            die('Role invalide');
    }
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
    
    $this->userrepo->updatactive($_SESSION['id'],1);
  
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
public function logout($id,$act){
    $this->userrepo->updatactive($id,$act);
    header('location:index.php');
    session_destroy();
}

}