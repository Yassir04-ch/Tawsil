<?php 
namespace Src\Controller;

require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Service\AdmineService;
session_start();
$admineser = new AdmineService() ;
$commandes = $admineser->affichallcommandes();
 
?>