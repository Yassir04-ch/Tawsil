<?php
namespace Src\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Service\AdmineService;
$id = $_GET['id'];
$adminser = new AdmineService();
$adminser->activeconte($id);
header("location:../views/utilisateurs.php");

