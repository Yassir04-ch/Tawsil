<?php 
namespace Src\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Request\RegisterRequest;
use Src\Repository\UserRepository;
use Src\Service\AuthService;
session_start();
if (!isset($_POST['submit'])) {
 header("location:../views/login.php");
 exit;
}
$requist = new RegisterRequest($_POST);
$userepo = new UserRepository();
$authser = new AuthService($userepo);
$msg = $authser->register($requist);

if(is_string($msg)) {
    $_SESSION['error'] = $msg;
    header('location:../views/register.php');
    exit;
}
header('location:../views/login.php');

?>
