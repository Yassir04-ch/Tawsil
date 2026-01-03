<?php 
require_once 'src/Entity/User.php';
require_once 'src/Entity/Admin.php';
require_once 'src/Entity/Client.php';
require_once 'src/Entity/Livreur.php';
require_once 'src/Repository/UserRepository.php';
require_once 'src/Service/AuthService.php';

session_start();
if (!isset($_POST['submit'])) {
 header("location:login.php");
 exit;
}

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

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

$userepo = new UserRepository();
$authser = new AuthService($userepo);

$succuc = $authser->register($user);

var_dump($succuc);

?>
