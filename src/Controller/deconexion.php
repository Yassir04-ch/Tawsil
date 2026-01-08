<?php
require_once '../Entity/User.php';
require_once '../Repository/UserRepository.php';
require_once '../Service/AuthService.php';
session_start();
var_dump($_SESSION['id']);
$userrepo = new UserRepository();
$logout = new AuthService($userrepo);
$id = $_SESSION['id'];
$act = 0;
$logout->logout($id,$act);