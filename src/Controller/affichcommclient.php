<?php
namespace Src\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Repository\CommandeRepository;
session_start();

if (!isset($_SESSION['id'])) {
    header('location:../../index.php');
    exit;
}
$commanderep = new CommandeRepository();
$commandes = $commanderep->affichCommandes($_SESSION['id']);
