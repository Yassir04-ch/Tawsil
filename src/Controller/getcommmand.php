<?php
namespace Src\Controller;

require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Service\CommandeService;
session_start();
$id = $_GET['id'];
$commandeser = new CommandeService();
$commande = $commandeser->getcommmande( $id);