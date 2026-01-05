<?php
require_once 'src/Entity/User.php';
require_once 'src/Repository/UserRepository.php';
require_once 'src/Service/AuthService.php';
session_start();
if (!isset($_POST['submit'])) {
 header("location:login.php");
 exit;
}

$email = $_POST['email'];
$password = $_POST['password'];
$userrepo = new UserRepository();
$authser = new AuthService ($userrepo);
$user =  $authser->login($email,$password);
var_dump($user);

?>
