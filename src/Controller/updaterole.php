<?php
namespace Src\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';

use Src\Service\AdmineService;

$id = $_POST['id'];
$role = $_POST['role'];
var_dump($id, $role);
$adminser = new AdmineService();
$adminser->updateroleuser($id,$role);
        header("location:../views/utilisateurs");


