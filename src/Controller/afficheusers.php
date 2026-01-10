<?php
namespace Src\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Service\AdmineService;
session_start();
if (!isset($_SESSION['id']) || $_SESSION['role'] != 'admin') {
    header('location:index.php');
    exit();
}
$adminser = new AdmineService();
$id = $_SESSION['id'];
$users = $adminser->affichusers($id);

?>