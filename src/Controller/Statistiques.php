<?php 
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Service\AdmineService;
session_start();
$admineser = new AdmineService();
$total = $admineser->totalprix();
$comm =  $admineser->commandter();
$annuler =  $admineser->commandeannul();
?>