<?php
namespace Src\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Repository\UserRepository;
use Src\Service\AuthService;

session_start();
var_dump($_SESSION['id']);
$userrepo = new UserRepository();
$logout = new AuthService($userrepo);
$id = $_SESSION['id'];
$act = 0;
$logout->logout($id,$act);