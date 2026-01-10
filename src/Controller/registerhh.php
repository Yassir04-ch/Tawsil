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

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$userepo = new UserRepository();
$authser = new AuthService($userepo);

$msg = $authser->register($fname,$lname,$email,$password,$role);
$_SESSION['error'] = $msg;

header('location:../views/register.php');

?>
