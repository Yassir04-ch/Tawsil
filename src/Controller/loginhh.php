<?php
namespace Src\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Request\LoginRequest;
use Src\Repository\UserRepository;
use Src\Service\AuthService;

session_start();
if (!isset($_POST['submit'])) {
 header("location:../views/login.php");
 exit;
} 
$request = new loginRequest($_POST);
$userrepo = new UserRepository();
$authser = new AuthService ($userrepo);
$result = $authser->login($request);
if(is_string($result)) {
   $_SESSION['error'] = $result;
   header('location:../views/login.php');
}


