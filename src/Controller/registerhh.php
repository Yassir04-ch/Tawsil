<?php 
require_once '../Entity/User.php';
require_once '../Entity/Admin.php';
require_once '../Entity/Client.php';
require_once '../Entity/Livreur.php';
require_once '../Repository/UserRepository.php';
require_once '../Service/AuthService.php';

session_start();
if (!isset($_POST['submit'])) {
 header("location:../views/login.php");
 exit;
}

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$userepo = new UserRepository();
$authser = new AuthService($userepo);

$msg = $authser->register($fname,$lname,$email,$password,$role);

?>
