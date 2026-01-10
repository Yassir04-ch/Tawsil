<?php
namespace Src\Service;
use Src\Entity\Admin;
use Src\Entity\Livreur ;
use Src\Entity\Client;
class AuthService{

    private $userrepo;

    public function __construct( $userrepo) {
        $this->userrepo = $userrepo;
    }
   public function register($fname, $lname, $email, $password, $role) {

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        return "Email invalide";
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    switch ($role) {
        case 'client':
            $user = new Client($fname, $lname, $email, $hashedPassword, $role, 1);
            break;
        case 'livreur':
            $user = new Livreur($fname, $lname, $email, $hashedPassword, $role, 1);
            break;
        case 'admin':
            $user = new Admin($fname, $lname, $email, $hashedPassword, $role, 1);
            break;
        default:
            return 'Role invalide';
    }

    if ($this->userrepo->finduserbyemail($email)) {
        return "Email déjà utilisé!";
        
    }

    $this->userrepo->adduser($user);
    return "successfully";
}

public function login($email, $password) {
    $userdata = $this->userrepo->finduserbyemail($email);
    if (!$userdata) {
        return 'Email non trouvé';
    }

    if (!password_verify($password, $userdata['password'])) {
        return 'Mot de passe incorrect';
    }

    if ($userdata['active'] == 3) 
    {
        return 'Compte non actif';
    }

    $_SESSION['id'] = $userdata['id'];
    $_SESSION['firstname'] = $userdata['firstname'];
    $_SESSION['lastname']  = $userdata['lastname'];
    $_SESSION['email']     = $userdata['email'];
    $_SESSION['role']      = $userdata['role'];

    $this->userrepo->updatactive($_SESSION['id'], 1);

    switch ($userdata['role']) {
        case 'client': header('location:../views/client.php'); 
          break;
        case 'livreur': header('location:../views/livreur.php'); 
          break;
        default: header('location:../views/admin.php');
          break;
    }
}

public function logout($id,$act){
    $this->userrepo->updatactive($id,0);
    header('location:../../index.php');
    session_destroy();
}

}