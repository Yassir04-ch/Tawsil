<?php
require_once 'src/Entity/User.php';
require_once 'src/Repository/UserRepository.php';
require_once 'src/Service/AuthService.php';
session_start();
var_dump($_SESSION['id']);
$userrepo = new UserRepository();
$logout = new AuthService($userrepo);
$id = $_SESSION['id'];
$act = 0;
$logout->logout($id,$act);