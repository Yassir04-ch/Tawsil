<?php
require_once '../Entity/User.php';
require_once '../Repository/UserRepository.php';
require_once '../Service/AuthService.php';
session_start();
if (!isset($_POST['submit'])) {
 header("location:../views/login.php");
 exit;
}
$email = $_POST['email'];
$password = $_POST['password'];
$userrepo = new UserRepository();
$authser = new AuthService ($userrepo);
$authser->login($email,$password);
