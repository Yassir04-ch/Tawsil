<?php
namespace Src\Service;
use Src\Request\RegisterRequest;
use Src\Request\LoginRequest;
use Src\Entity\Client;
use Src\Entity\Livreur;
use Src\Entity\Admin;
class AuthService{

    private $userrepo;

    public function __construct( $userrepo) {
        $this->userrepo = $userrepo;
    }
   public function register(RegisterRequest  $request) {

    if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) 
    {
        return "Email invalide";
    }

    $hashedPassword = password_hash($request->password, PASSWORD_DEFAULT);

    switch ($request->role) {
        case 'client':
            $user = new Client($request->firstname, $request->lastname, $request->email, $hashedPassword, $request->role, 1);
            break;
        case 'livreur':
            $user = new Livreur($request->firstname, $request->lastname, $request->email, $hashedPassword, $request->role, 1);
            break;
        case 'admin':
            $user = new Admin($request->firstname, $request->lastname, $request->email, $hashedPassword, $request->role, 1);
            break;
        default:
            return 'Role invalide';
    }

    if ($this->userrepo->finduserbyemail($request->email)) {
        return "Email déjà utilisé!";
        
    }

    $this->userrepo->adduser($user);
}

public function login(LoginRequest $request) {
    $userdata = $this->userrepo->finduserbyemail($request->email);
    if (!$userdata) {
        return 'Email non trouvé';
    }

    if (!password_verify($request->password, $userdata['password'])) {
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

public function logout($id){
    $this->userrepo->updatactive($id,0);
    header('location:../../index.php');
    session_destroy();
}

}