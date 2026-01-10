<?php
namespace Src\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Service\CommandeService;
session_start();
if (!isset($_SESSION['id'])) {
    header('location:../../index.php');
    exit;
}
$client_id = $_SESSION['id'];
$commandeser = new CommandeService();
$commandes = $commandeser->getcommandes($client_id);
