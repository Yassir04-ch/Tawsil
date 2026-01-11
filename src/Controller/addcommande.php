<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Src\Entity\Commande;
use Src\Request\CommandeRequest;
use Src\Service\CommandeService;

session_start();
if (!isset($_POST['submit'])) {
    header('location:../views/client.php');
    exit;
}

$client_id = $_SESSION['id'];
$commandeRequest = new CommandeRequest($_POST,$client_id);
$commande = new Commande( $commandeRequest->client_id, $commandeRequest->description, 
 $commandeRequest->address_delivery, $commandeRequest->adresse,'En attente', 0   );

 $commandeser = new CommandeService();
$commandeser->addcommande($commande);
header('location:../views/client.php');
