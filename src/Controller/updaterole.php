<?php
require_once '../Repository/AdminRepository.php';
require_once '../Service/AdmineService.php';
$id = $_POST['id'];
$role = $_POST['role'];
var_dump($id, $role);
$adminser = new AdmineService();
$adminser->updateroleuser($id,$role);

