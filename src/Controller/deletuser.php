<?php
require_once '../Repository/AdminRepository.php';
require_once '../Service/AdmineService.php';
$id = $_GET['id'];
$adminser = new AdmineService();
$adminser->desactiverconte($id);

