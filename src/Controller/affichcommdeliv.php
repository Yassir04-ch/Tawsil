<?php
namespace Src\Controller;

require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Repository\CommandeRepository;
session_start();
$commandeRepo = new CommandeRepository();
$commandes = $commandeRepo->commandelivreur();
?>