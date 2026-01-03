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
          $_SESSION['firstname'] = $user->getFirstname();
          $_SESSION['lastname']  = $user->getLastname();
          $_SESSION['email']     = $user->getEmail();
          $_SESSION['role']      = $user->getRole();

    if ($user->getRole() === 'client') {
        header('Location: client.php');
        exit;
    } elseif ($user->getRole() === 'livreur') {
        header('Location: livreur.php');
        exit;
    } else {
        header('Location: admin.php');
        exit;
    }
    }

    public function login($email,$password){
        $userdata = $this->userrepo->finduserbyemail($email);
        if (!$userdata) {
            return 'Email non trouvé';
            
        }
        if($password !== $userdata['password']){
            return 'password incorect';
        }

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