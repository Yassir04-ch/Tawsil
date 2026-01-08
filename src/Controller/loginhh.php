<?php
namespace Src\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Repository\UserRepository;
use Src\Service\AuthService;

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
