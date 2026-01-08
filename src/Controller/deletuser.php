<?php
namespace Src\Controller;
use Src\Service\AdmineService;
$id = $_GET['id'];
$adminser = new AdmineService();
$adminser->desactiverconte($id);
header("location:../views/utilisateurs.php");

